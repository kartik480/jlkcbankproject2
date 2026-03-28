<?php

use App\Models\CareerApplication;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
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

Route::get('/services/daily-deposit-scheme', function () {
    return view('daily-deposit-scheme');
})->name('services.daily-deposit-scheme');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::post('/careers/apply', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:50',
        'email' => 'required|email|max:255',
        'city' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
        'additional' => 'nullable|string|max:5000',
    ]);

    $resumePath = $request->file('resume')->store('career_resumes', 'local');

    CareerApplication::create([
        'name' => $validated['name'],
        'phone' => $validated['phone'],
        'email' => $validated['email'],
        'city' => $validated['city'],
        'position' => $validated['position'],
        'resume_path' => $resumePath,
        'additional' => $validated['additional'] ?? null,
    ]);

    return redirect()
        ->route('careers')
        ->withFragment('apply-now')
        ->with('careers_apply_status', 'Thank you — we have received your application.');
})->name('careers.apply');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:50',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:10000',
    ]);

    ContactMessage::create($validated);

    return redirect()->route('contact')->with('contact_status', 'Thank you — we have received your message.');
})->name('contact.submit');
