<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')->with('contact_status', 'Thank you — we have received your message.');
})->name('contact.submit');
