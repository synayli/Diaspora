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
            'the_hacker_news_latest',
            now()->addMinutes(30),
            function () use ($limit) {
                try {
                    $response = Http::timeout(15)
                        ->withHeaders([
                            'User-Agent' => 'DiasporaWebsite/1.0',
                        ])
                        ->get('https://thehackernews.com/feeds/posts/default');

                    if (! $response->successful()) {
                        return collect();
                    }

                    $xml = simplexml_load_string(
                        $response->body(),
                        \SimpleXMLElement::class,
                        LIBXML_NONET | LIBXML_NOCDATA
                    );

                    if ($xml === false) {
                        return collect();
                    }

                    $items = $xml->channel->item ?? [];
                    $articles = collect();

                    foreach ($items as $item) {
                        $title = trim((string) $item->title);
                        $url = trim((string) $item->link);

                        $host = parse_url($url, PHP_URL_HOST);

                        if (
                            $title === '' ||
                            ! filter_var($url, FILTER_VALIDATE_URL) ||
                            ! in_array($host, [
                                'thehackernews.com',
                                'www.thehackernews.com',
                            ], true) ||
                            parse_url($url, PHP_URL_SCHEME) !== 'https'
                        ) {
                            continue;
                        }

                        $description = strip_tags(
                            (string) $item->description
                        );

                        $description = html_entity_decode(
                            $description,
                            ENT_QUOTES | ENT_HTML5,
                            'UTF-8'
                        );

                        $description = preg_replace(
                            '/\s+/u',
                            ' ',
                            trim($description)
                        );

                        $date = strtotime((string) $item->pubDate);

                        $categories = $item->category;
                        $category = trim((string) ($categories[0] ?? ''));

                        $articles->push([
                            'title' => $title,
                            'url' => $url,
                            'description' => Str::limit(
                                $description,
                                160
                            ),
                            'category' => $category !== ''
                                ? $category
                                : 'Cybersecurity',
                            'published_at' => $date
                                ? date('d M Y', $date)
                                : null,
                        ]);
                    }

                    return $articles->take($limit)->values();

                } catch (\Throwable $e) {
                    report($e);

                    return collect();
                }
            }
        );
    }
}
