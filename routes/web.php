<?php
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('categories',CategoryController::class);

Route::get('/dashboard/artist', [ArtistController::class, 'showArtistPage'])->name('dashboard.artist');
Route::get('/dashboard/artworks', [ArtworkController::class, 'showArtworks'])->name('dashboard.artworks');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/front', function () {
    return view('front.index');
});
// Route::get('/user', function () {
//     return view('dashboard.user');
// });

Route::resource('/users', UserController::class);

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/profile', function () {
    return view('dashboard.profile');
});
Route::get('/layout', function () {
    return view('dashboard.layout');
});
// Route::get('/signup', function () {
//     return view('signup');
// });
// routes/web.php
// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });




// Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/password/reset-link', [AuthController::class, 'sendPasswordResetLink'])->name('password.reset-link');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::get('/email/verify', [AuthController::class, 'verifyEmail'])->name('verification.notice');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Password Reset Routes
// Password Reset Routes
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes/web.php

Route::middleware('role:admin')->group(function () {
    // Routes accessible only by users with the 'admin' role
});

Route::middleware('role:user')->group(function () {
    // Routes accessible only by users with the 'user' role
});



Route::get('/change-role', [HomeController::class, 'showChangeRoleForm'])->name('show-change-role');
Route::post('/change-role', [HomeController::class, 'changeRole'])->name('change-role');

// Route::middleware(['role:artist'])->group(function () {
//     // Show artist profile
    Route::get('/artists/{id}', [ArtistController::class, 'showProfile'])->name('artists.showProfile');

    // // Update artist profile
    Route::put('/artists/{id}', [ArtistController::class, 'updateProfile'])->name('artists.updateProfile');

    // // Delete artist profile
    Route::delete('/artists/{id}', [ArtistController::class, 'deleteProfile'])->name('artists.deleteProfile');

    // // Create artist profile
    Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');
    Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');
// });
route::resource('artists',ArtistController::class);
route::resource('artworks',ArtworkController::class);
//  Route::get('/artists/{id}', [ArtistController::class, 'showProfile'])->name('artists.showProfile');
