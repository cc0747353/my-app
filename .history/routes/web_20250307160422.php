<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/accounts', function () {
    return view('frontend.accounts');
})->name('accounts');

Route::get('/loans', function () {
    return view('frontend.loans');
})->name('loans');

Route::get('/credit-cards', function () {
    return view('frontend.credit-cards');
})->name('credit-cards');

Route::get('/online-banking', function () {
    return view('frontend.online-banking');
})->name('online-banking');

Route::get('/mobile-banking', function () {
    return view('frontend.mobile-banking');
})->name('mobile-banking');

Route::get('/customer-support', function () {
    return view('frontend.customer-support');
})->name('customer-support');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->name('dashboard');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-and-conditions', function () {
    return view('frontend.terms-and-conditions');
})->name('terms-and-conditions');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';


