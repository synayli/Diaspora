<?php

use App\Services\HackerNewsFeed;
use App\Services\Nc4AdvisoryFeed;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Homepage: 3 Hacker News articles + 3 NC4 advisories
Route::get('/', function (
    HackerNewsFeed $feed,
    Nc4AdvisoryFeed $nc4Feed
) {
    $hackerNews = $feed->latest(3)->map(function ($article) {
        $article['source'] = 'The Hacker News';

        return $article;
    });

    $nc4Advisories = $nc4Feed->latest(3);

    $insights = $hackerNews
        ->concat($nc4Advisories)
        ->values();

    return view('home', compact('insights'));
})->name('home');

// Certification page
Route::view('/certification', 'certification')
    ->name('certification');

// Media page

Route::get('/media', function (
    HackerNewsFeed $feed,
    Nc4AdvisoryFeed $nc4Feed
) {
    $hackerNews = collect($feed->latest(3))
        ->map(function ($article) {
            $article['source'] = 'The Hacker News';

            return $article;
        });

    $nc4Advisories = collect($nc4Feed->latest(3));

    $insights = $hackerNews
        ->concat($nc4Advisories)
        ->values();

    return view('media', compact('insights'));
})->name('media');


// Individual service pages
Route::view(
    '/services/cyber-security-assessment',
    'services.cyber-security-assessment'
)->name('services.assessment');

Route::view(
    '/services/governance-compliance',
    'services.governance-compliance'
)->name('services.governance');

Route::view(
    '/services/disaster-recovery',
    'services.disaster-recovery'
)->name('services.disaster-recovery');

// Contact form submission
Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:5,1')
    ->name('contact.send');