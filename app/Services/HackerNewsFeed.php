<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class HackerNewsFeed
{
    public function latest(int $limit = 6)
    {
        return Cache::remember(
            'the_hacker_news_latest_v4',
            now()->addMinutes(10),
            function () use ($limit) {
                try {
                    $response = Http::timeout(20)
                        ->withHeaders([
                            'User-Agent' => 'Mozilla/5.0 DiasporaWebsite/1.0',
                            'Accept' => 'application/rss+xml, application/xml, text/xml',
                        ])
                        ->get('https://thehackernews.com/feeds/posts/default');

                    if (! $response->successful()) {
                        logger()->warning(
                            'The Hacker News RSS returned HTTP '.$response->status()
                        );

                        return collect();
                    }

                    libxml_use_internal_errors(true);

                    $xml = simplexml_load_string(
                        $response->body(),
                        \SimpleXMLElement::class,
                        LIBXML_NONET | LIBXML_NOCDATA
                    );

                    if ($xml === false) {
                        logger()->warning(
                            'Unable to parse The Hacker News RSS feed.'
                        );

                        return collect();
                    }

                    $articles = collect();

                    foreach (($xml->channel->item ?? []) as $item) {
                        $title = trim((string) $item->title);
                        $url = trim((string) $item->link);

                        $host = strtolower(
                            (string) parse_url($url, PHP_URL_HOST)
                        );

                        if (
                            $title === '' ||
                            ! filter_var($url, FILTER_VALIDATE_URL) ||
                            parse_url($url, PHP_URL_SCHEME) !== 'https' ||
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

                        $date = strtotime((string) $item->pubDate);

                        $category = trim(
                            (string) ($item->category[0] ?? '')
                        );

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
                            'published_at' => $date
                                ? date('d M Y', $date)
                                : null,
                        ]);

                        if ($articles->count() >= $limit) {
                            break;
                        }
                    }

                    logger()->info(
                        'The Hacker News articles loaded: '.$articles->count()
                    );

                    return $articles->values();

                } catch (\Throwable $e) {
                    logger()->error(
                        'The Hacker News feed failed: '.$e->getMessage()
                    );

                    return collect();
                }
            }
        );
    }
}
