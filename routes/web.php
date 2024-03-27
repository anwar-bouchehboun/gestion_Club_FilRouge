<?php

use App\Http\Controllers\Admin\AdminClubControlle;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConroller;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\CategorieController;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminControlle;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SouscategorieController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminCatgorieController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;




// visteur

Route::get('/', [HomeConroller::class, 'index'])->name('home');

Route::get('club', [ClubController::class, 'index'])->name('club');
Route::get('categorie', [CategorieController::class, 'index'])->name('categorie');
Route::get('souscategorie', [SouscategorieController::class, 'index'])->name('souscategorie');
Route::get('souscategorie/show', [SouscategorieController::class, 'show']);

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/Dashbord', [AdminControlle::class, 'index'])->name('Dashbord');
    Route::resource('/Dashbord/categorie', AdminCatgorieController::class);
    Route::resource('/Dashbord/Event', AdminEventController::class);
    Route::resource('/Dashbord/User', AdminUserController::class);
    Route::resource('/Dashbord/Club', AdminClubControlle::class);
});



Route::middleware(['auth', 'role:client'])->group(function () {
    Route::post('/session', [StripeController::class, 'session'])->name('session');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});









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