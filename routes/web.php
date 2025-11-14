<?php

use App\Http\Controllers\EarlyAccessRequestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('TourOperators', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/tour-operators', function () {
    return Inertia::render('TourOperators', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('tour-operators');

Route::get('/accommodation-owners', function () {
    return Inertia::render('AccommodationOwners', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('accommodation-owners');

Route::get('/early-access', [EarlyAccessRequestController::class, 'create'])
    ->name('early-access.create');

Route::post('/early-access', [EarlyAccessRequestController::class, 'store'])
    ->name('early-access.store');

Route::get('/early-access/thank-you', function () {
    return Inertia::render('EarlyAccessThankYou');
})->name('early-access.thank-you');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
