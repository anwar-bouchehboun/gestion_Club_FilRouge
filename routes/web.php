<?php

use App\Http\Controllers\HomeConroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;




Route::get('/', [HomeConroller::class, 'index'])->name('home');


Route::get('/club', function () {
    return view('client.club');
});
Route::get('/sous', function () {
    return view('client.souscategrie');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login.index');