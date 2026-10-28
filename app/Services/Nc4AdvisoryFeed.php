<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use DOMDocument;
use DOMElement;
use DOMXPath;

class Nc4AdvisoryFeed
{
    public function latest(int $limit = 3)
    {
        $limit = max(1, min($limit, 10));

        $cacheKey = 'nc4_latest_advisories_v1';
        $lastGoodKey = 'nc4_last_successful_advisories';

        $cached = Cache::get($cacheKey);

        if (is_array($cached) && count($cached) > 0) {
            return collect($cached)->take($limit)->values();
        }

        try {
            $response = Http::timeout(20)
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 DiasporaWebsite/1.0',
                    'Accept' => 'text/html,application/xhtml+xml',
                ])
                ->get('https://www.nc4.gov.my/alertAdvisory?lang=en');

            if (! $response->successful()) {
                throw new \RuntimeException(
                    'NC4 returned HTTP '.$response->status()
                );
            }

            $previousErrors = libxml_use_internal_errors(true);

            try {
                $document = new DOMDocument();

                $loaded = $document->loadHTML(
                    '<?xml encoding="UTF-8">' . $response->body(),
                    LIBXML_NONET | LIBXML_NOERROR | LIBXML_NOWARNING
                );
            } finally {
                libxml_clear_errors();
                libxml_use_internal_errors($previousErrors);
            }

            if (! $loaded) {
                throw new \RuntimeException(
                    'Unable to parse the NC4 advisory page.'
                );
            }

            $xpath = new DOMXPath($document);

            $links = $xpath->query(
                '//a[contains(@href, "/alertAdvisory-detail/")]'
            );

            if (! $links || $links->length === 0) {
                throw new \RuntimeException(
                    'No NC4 advisory links were found on the page.'
                );
            }

            $advisories = collect();
            $seenUrls = [];

            foreach ($links as $link) {
                if (! $link instanceof DOMElement) {
                    continue;
                }

                $href = trim($link->getAttribute('href'));

                if ($href === '') {
                    continue;
                }

                $url = str_starts_with($href, 'http')
                    ? $href
                    : 'https://www.nc4.gov.my/' . ltrim($href, '/');

                $host = strtolower(
                    (string) parse_url($url, PHP_URL_HOST)
                );

                $path = (string) parse_url($url, PHP_URL_PATH);

                if (
                    ! in_array($host, [
                        'nc4.gov.my',
                        'www.nc4.gov.my',
                    ], true) ||
                    ! str_starts_with(
                        $path,
                        '/alertAdvisory-detail/'
                    ) ||
                    strtolower((string) parse_url($url, PHP_URL_SCHEME))
                        !== 'https'
                ) {
                    continue;
                }

                if (isset($seenUrls[$url])) {
                    continue;
                }

                $seenUrls[$url] = true;

                // Find the closest parent containing an advisory heading.
                $card = null;
                $heading = null;

                for (
                    $parent = $link->parentNode;
                    $parent instanceof DOMElement;
                    $parent = $parent->parentNode
                ) {
                    $headings = $xpath->query(
                        './/h1 | .//h2 | .//h3 | .//h4',
                        $parent
                    );

                    if ($headings && $headings->length > 0) {
                        foreach ($headings as $candidate) {
                            $candidateTitle = trim(
                                preg_replace(
                                    '/\s+/u',
                                    ' ',
                                    $candidate->textContent
                                ) ?? ''
                            );

                            if (
                                $candidateTitle !== '' &&
                                ! preg_match(
                                    '/^(alert\s*&?\s*advisories|view details)$/i',
                                    $candidateTitle
                                )
                            ) {
                                $card = $parent;
                                $heading = $candidate;
                                break 2;
                            }
                        }
                    }

                    // Avoid traversing all the way up to the whole document.
                    if (strtolower($parent->tagName) === 'body') {
                        break;
                    }
                }

                if (! $card || ! $heading) {
                    continue;
                }

                $title = trim(
                    preg_replace(
                        '/\s+/u',
                        ' ',
                        $heading->textContent
                    ) ?? ''
                );

                if ($title === '') {
                    continue;
                }

                $cardText = trim(
                    preg_replace(
                        '/\s+/u',
                        ' ',
                        $card->textContent
                    ) ?? ''
                );

                $paragraphs = $xpath->query('.//p', $card);
                $description = '';

                if ($paragraphs && $paragraphs->length > 0) {
                    foreach ($paragraphs as $paragraph) {
                        $text = trim(
                            preg_replace(
                                '/\s+/u',
                                ' ',
                                $paragraph->textContent
                            ) ?? ''
                        );

                        if ($text !== '') {
                            $description = $text;
                            break;
                        }
                    }
                }

                if ($description === '') {
                    $description = 'Read the latest official cybersecurity alert or advisory from NC4.';
                }

                $publishedAt = null;

                if (
                    preg_match(
                        '/\b\d{1,2}\s+[A-Za-z]{3,9}\s+\d{4}\b/',
                        $cardText,
                        $dateMatch
                    )
                ) {
                    $timestamp = strtotime($dateMatch[0]);

                    if ($timestamp !== false) {
                        $publishedAt = date('d M Y', $timestamp);
                    }
                }

                $category = preg_match('/\bAlert\b/i', $cardText)
                    ? 'Alert'
                    : 'Advisory';

                $advisories->push([
                    'title' => $title,
                    'url' => $url,
                    'description' => Str::limit($description, 180),
                    'category' => $category,
                    'published_at' => $publishedAt,
                    'source' => 'NC4',
                ]);

                if ($advisories->count() >= $limit) {
                    break;
                }
            }

            if ($advisories->isEmpty()) {
                throw new \RuntimeException(
                    'No valid NC4 advisories could be extracted.'
                );
            }

            $result = $advisories->values()->all();

            Cache::put(
                $cacheKey,
                $result,
                now()->addMinutes(10)
            );

            Cache::put(
                $lastGoodKey,
                $result,
                now()->addDays(7)
            );

            Log::info(
                'NC4 advisories loaded: '.$advisories->count()
            );

            return collect($result)->take($limit)->values();

        } catch (\Throwable $e) {
            Log::warning(
                'NC4 advisory feed failed: '.$e->getMessage()
            );

            $previous = Cache::get($lastGoodKey);

            if (is_array($previous) && count($previous) > 0) {
                return collect($previous)->take($limit)->values();
            }

            return collect();
        }
    }
}