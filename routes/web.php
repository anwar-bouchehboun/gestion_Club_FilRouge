<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\SouscategorieController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeConroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;






Route::get('/', [HomeConroller::class, 'index'])->name('home');

Route::get('/Dashbord', [AdminController::class, 'index']);

Route::middleware(['auth', 'role:client'])->group(function () {

    Route::post('/session', [StripeController::class, 'session'])->name('session');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});






Route::resource('club',ClubController::class);
Route::resource('categorie',CategorieController::class);
Route::resource('souscategorie',SouscategorieController::class);


//guest
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::post('logine', [LoginController::class, 'store'])->name('login.store');
    Route::get('/request', [ForgotPasswordLinkController::class, 'create']);
    Route::post('/request', [ForgotPasswordLinkController::class, 'store']);
    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('reset');
});
