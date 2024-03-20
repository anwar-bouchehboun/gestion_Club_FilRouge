<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/club', function () {
    return view('client.club');
});
Route::get('/sous', function () {
    return view('client.souscategrie');
});
Route::get('/login', function () {
    return view('auth.login');
});
// Route::get('/register', function () {
//     return view('auth.register');
// });
Route::get('register', [RegisterController::class, 'create'])
->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
