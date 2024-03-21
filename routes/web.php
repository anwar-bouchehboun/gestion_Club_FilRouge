<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ForgotPasswordLinkController;




Route::get('/', [HomeConroller::class, 'index'])->name('home');


// Route::get('/club', function () {
//     return view('client.club');
// });
Route::get('/sous', function () {
    return view('client.souscategrie');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/club', function () {
        return view('client.club');
    });
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::post('logine', [LoginController::class, 'store'])->name('login.store');
    Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store']);
    Route::post('/forgot-password/{token}', [ForgotPasswordController::class, 'reset']);
});