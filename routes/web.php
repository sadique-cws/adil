<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $portfolioItems = \App\Models\Portfolio::latest()->take(6)->get();
    return view('welcome', ['portfolioItems' => $portfolioItems]);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-submit', [App\Http\Controllers\EnquiryController::class, 'submit'])->name('contact.submit');

Route::post('/contact-submit', [App\Http\Controllers\EnquiryController::class, 'submit'])->name('contact.submit');

// --- Auth Routes ---
Route::get('auth/google', [App\Http\Controllers\SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\SocialAuthController::class, 'handleGoogleCallback']);
Route::get('auth/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
})->name('logout');

// --- Admin Routes (Protected) ---
Route::middleware(['auth', 'admin.access'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');

    // Image Upload (Moved inside auth, using existing names but prefixed automatically? 
    // No, duplicate names if I nest them with 'as'. Let's strictly use the controller paths)
    // Actually, 'admin.' prefix affects names.
    // Existing routes were 'image.upload'.
    // I'll manually define them to keep names or just use full paths.

    Route::get('/upload', [App\Http\Controllers\ImageKitController::class, 'showUploadForm'])->name('upload'); // admin.upload
    Route::post('/upload', [App\Http\Controllers\ImageKitController::class, 'upload'])->name('upload.post'); // admin.upload.post

    // Portfolio Management
    Route::delete('/portfolio/{id}', [App\Http\Controllers\PortfolioController::class, 'delete'])->name('portfolio.delete');
});
