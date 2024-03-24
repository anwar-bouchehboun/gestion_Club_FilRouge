<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeConroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;






Route::get('/', [HomeConroller::class, 'index'])->name('home');


Route::get('/club', function () {
    return view('client.club');
});
Route::get('/categorie', function () {
    return view('client.categorie');
});
Route::get('/show', function () {
    return view('client.show');
});
Route::get('/sous', function () {
    return view('client.souscategrie');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::middleware(['auth', 'role:client'])->group(function () {
    // Route::get('/club', function () {
    //     return view('client.club');
    // });
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
// stripe
Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');

















Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::post('logine', [LoginController::class, 'store'])->name('login.store');
    // Route::get('forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot.form');
    // Route::post('forgot-password', [ForgotPasswordLinkController::class, 'store'])->name('forgot.store');
    // //  Route::post('reset-password', [ForgotPasswordController::class, 'reset'])->name('reset.password');
    // Route::post('/forgot-password/{token}', [ForgotPasswordController::class, 'reset']);
    Route::get('/request', [ForgotPasswordLinkController::class, 'create']);

    Route::post('/request', [ForgotPasswordLinkController::class, 'store']);

    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');

    Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('reset');
});
