<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; // Pastikan namespace ini benar
use App\Http\Controllers\{
    HomeController,
    EventController,
    ServiceController,
    GalleryController,
    ContactController,
    PaymentController,
    ProfileController
};
use App\Filament\Pages\Dashboard;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::get('/search', [EventController::class, 'search'])->name('events.search');
    Route::get('/{event}', [EventController::class, 'show'])->name('events.show');
});

/*
|--------------------------------------------------------------------------
| Authentication (User & Admin)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/payment', [PaymentController::class, 'index'])->name('payments');

    Route::post('/events/{event}/book', [EventController::class, 'book'])->name('events.book');

    Route::prefix('payment')->group(function () {
        Route::get('/{service}', [PaymentController::class, 'show'])->name('payment.show');
        Route::post('/confirm', [PaymentController::class, 'confirm'])->name('payment.confirm');
        Route::get('/success', [PaymentController::class, 'success'])->name('payment.success');
    });
});

/*
|--------------------------------------------------------------------------
| Admin (Protected) Routes via Middleware
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', fn() => redirect()->route('admin.dashboard'))->name('admin.home');

    // Filament dashboard
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');

    // Admin payment detail
    Route::get('/payments/{id}', [PaymentController::class, 'adminShow'])->name('admin.payments.show');
});
