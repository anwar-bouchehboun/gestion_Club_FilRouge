<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConroller;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Admin\AdminControlle;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SouscategorieController;
use App\Http\Controllers\Admin\AdminClubControlle;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Members\ComentaireController;
use App\Http\Controllers\Admin\AdminCatgorieController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Members\ComentaireSousController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Admin\AdminSousCategorieController;

// visteur

Route::get('/', [HomeConroller::class, 'index'])->name('home');

Route::get('club', [ClubController::class, 'index'])->name('club');
Route::get('club/{id}', [ClubController::class, 'show'])->name('categorie');
Route::get('categorie', [CategorieController::class, 'index'])->name('categorie.data');
Route::get('categorie/{id}', [CategorieController::class, 'show'])->name('souscategorie');
Route::get('souscategorie/show/{id}', [SouscategorieController::class, 'show'])->name('show.reseve');

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/Dashbord', [AdminControlle::class, 'index'])->name('Dashbord');
    Route::resource('/Dashbord/categorie', AdminCatgorieController::class);
    Route::resource('/Dashbord/souscategorie', AdminSousCategorieController::class);
    Route::resource('/Dashbord/event', AdminEventController::class);
    Route::resource('/Dashbord/user', AdminUserController::class);
    Route::get('user/search', [AdminUserController::class, 'search']);
    Route::resource('/Dashbord/club', AdminClubControlle::class);

});
// logout
Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
// client
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::post('/session', [StripeController::class, 'session'])->name('session');
    Route::get('/success/{event_id}', [StripeController::class, 'success'])->name('success');
    Route::post('/session/sous', [ReservationController::class, 'session'])->name('sessionsous');
    Route::get('/successsous/{sous_id}', [ReservationController::class, 'successsous'])->name('successsous');
    Route::resource('/membereShips', MemberController::class);
    Route::resource('/comentaire', ComentaireController::class);
    Route::resource('/comentairesous', ComentaireSousController::class);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'updateprofile']);
    Route::post('/profile/password', [ProfileController::class, 'Set_Pssword'])->name('update.password');


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