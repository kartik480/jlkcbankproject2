<?php

use App\Http\Controllers\MembershipAdvisorFormController;
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

Route::get('/services/savings-account', function () {
    return view('savings-account');
})->name('services.savings-account');

Route::get('/services/current-account', function () {
    return view('current-account');
})->name('services.current-account');

Route::get('/services/fixed-deposit', function () {
    return view('fixed-deposit');
})->name('services.fixed-deposit');

Route::get('/services/monthly-income-scheme', function () {
    return view('monthly-income-scheme');
})->name('services.monthly-income-scheme');

Route::get('/services/recurring-deposit', function () {
    return view('recurring-deposit');
})->name('services.recurring-deposit');

Route::get('/services/personal-loan', function () {
    return view('personal-loan');
})->name('services.personal-loan');

Route::get('/services/home-loan', function () {
    return view('home-loan');
})->name('services.home-loan');

Route::get('/services/auto-loan', function () {
    return view('auto-loan');
})->name('services.auto-loan');

Route::get('/services/business-loan', function () {
    return view('business-loan');
})->name('services.business-loan');

Route::get('/services/agricultural-loan', function () {
    return view('agricultural-loan');
})->name('services.agricultural-loan');

Route::get('/services/gold-loan', function () {
    return view('gold-loan');
})->name('services.gold-loan');

Route::get('/services/loan-against-recurring-deposit', function () {
    return view('loan-against-recurring-deposit');
})->name('services.loan-against-recurring-deposit');

Route::get('/membership-form', function () {
    return view('membership-form', [
        'formTitle' => 'General Membership Form',
        'formType' => 'membership',
    ]);
})->name('membership.form');

Route::post('/membership-form', [MembershipAdvisorFormController::class, 'storeMembership'])
    ->name('membership.form.submit');

Route::get('/advisor-form', function () {
    return view('membership-form', [
        'formTitle' => 'Advisor Enrollment Form',
        'formType' => 'advisor',
    ]);
})->name('advisor.form');

Route::post('/advisor-form', [MembershipAdvisorFormController::class, 'storeAdvisor'])
    ->name('advisor.form.submit');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/careers/jobs/{slug}', function (string $slug) {
    $jobs = config('careers_jobs', []);
    if (! is_array($jobs) || ! array_key_exists($slug, $jobs)) {
        abort(404);
    }

    return view('careers-job-show', [
        'slug' => $slug,
        'job' => $jobs[$slug],
    ]);
})->name('careers.job');

Route::get('/careers/manager', function () {
    return redirect()->route('careers.job', ['slug' => 'manager'], 301);
})->name('careers.manager');

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
