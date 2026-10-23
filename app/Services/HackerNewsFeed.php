<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class HackerNewsFeed
{
    public function latest(int $limit = 6)
    {
        $limit = max(1, min($limit, 20));

        $cacheKey = 'the_hacker_news_latest_v5';
        $lastGoodKey = 'the_hacker_news_last_successful';

        // Return the regularly refreshed feed when available.
        $cached = Cache::get($cacheKey);

        if (is_array($cached) && count($cached) > 0) {
            return collect($cached)->take($limit)->values();
        }

        try {
            $response = Http::timeout(15)
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 DiasporaWebsite/1.0',
                    'Accept' => 'application/rss+xml, application/xml, text/xml',
                ])
                ->get('https://thehackernews.com/feeds/posts/default');

            if (! $response->successful()) {
                throw new \RuntimeException(
                    'RSS request returned HTTP '.$response->status()
                );
            }

            libxml_use_internal_errors(true);

            try {
                $xml = simplexml_load_string(
                    $response->body(),
                    \SimpleXMLElement::class,
                    LIBXML_NONET | LIBXML_NOCDATA
                );
            } finally {
                libxml_clear_errors();
            }

            if ($xml === false || ! isset($xml->channel->item)) {
                throw new \RuntimeException('The RSS response could not be parsed.');
            }

            $articles = collect();

            foreach ($xml->channel->item as $item) {
                $title = trim((string) $item->title);
                $url = trim((string) $item->link);

                $host = strtolower(
                    (string) parse_url($url, PHP_URL_HOST)
                );

                if (
                    $title === '' ||
                    ! filter_var($url, FILTER_VALIDATE_URL) ||
                    strtolower((string) parse_url($url, PHP_URL_SCHEME)) !== 'https' ||
                    ! in_array($host, [
                        'thehackernews.com',
                        'www.thehackernews.com',
                    ], true)
                ) {
                    continue;
                }

                $description = html_entity_decode(
                    strip_tags((string) $item->description),
                    ENT_QUOTES | ENT_HTML5,
                    'UTF-8'
                );

                $description = trim(
                    preg_replace('/\s+/u', ' ', $description) ?? ''
                );

                $timestamp = strtotime((string) $item->pubDate);

                $category = trim((string) ($item->category[0] ?? ''));

                $articles->push([
                    'title' => $title,
                    'url' => $url,
                    'description' => Str::limit(
                        $description !== ''
                            ? $description
                            : 'Read the latest cybersecurity news and developments.',
                        180
                    ),
                    'category' => $category !== ''
                        ? $category
                        : 'Cybersecurity',
                    'published_at' => $timestamp
                        ? date('d M Y', $timestamp)
                        : null,
                ]);

                if ($articles->count() >= $limit) {
                    break;
                }
            }

            if ($articles->isEmpty()) {
                throw new \RuntimeException(
                    'The RSS feed returned no valid articles.'
                );
            }

            $result = $articles->values()->all();

            // Cache fresh articles for the normal refresh interval.
            Cache::put($cacheKey, $result, now()->addMinutes(10));

            // Keep the last successful response for use during feed outages.
            Cache::put($lastGoodKey, $result, now()->addDays(7));

            Log::info('The Hacker News articles loaded: '.$articles->count());

            return collect($result)->take($limit)->values();

        } catch (\Throwable $e) {
            Log::warning(
                'The Hacker News feed failed: '.$e->getMessage()
            );

            // Never replace a successful cached feed with an empty result.
            $previous = Cache::get($lastGoodKey);

            if (is_array($previous) && count($previous) > 0) {
                return collect($previous)->take($limit)->values();
            }

            return collect();
        }
    }
}
