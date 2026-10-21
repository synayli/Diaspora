<?php

use App\Services\HackerNewsFeed;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Homepage with latest cybersecurity insights
Route::get('/', function (HackerNewsFeed $feed) {
    $insights = $feed->latest(6);

    return view('home', compact('insights'));
})->name('home');

// Certification page
Route::view('/certification', 'certification')
    ->name('certification');

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