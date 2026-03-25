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

Route::get('/services/mobile-banking', function () {
    return view('mobile-banking');
})->name('services.mobile-banking');

Route::get('/services/surety-bonds', function () {
    return view('surety-bonds');
})->name('services.surety-bonds');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')->with('contact_status', 'Thank you — we have received your message.');
})->name('contact.submit');
