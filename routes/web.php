<?php

use App\Services\HackerNewsFeed;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/certification', function () {
    return view('certification');
});

Route::get('/media', function (HackerNewsFeed $feed) {
    $insights = $feed->latest(6);

    return view('media', compact('insights'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:5,1')      // max 5 submissions per minute per visitor
    ->name('contact.send');