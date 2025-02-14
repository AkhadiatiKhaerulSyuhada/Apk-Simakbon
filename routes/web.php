<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\JuriController;

Route::get('/', function () {
    return view('pages.home');
})->name('home'); 

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/kontes', function () {
    return view('pages.kontes');
});

Route::get('/pendaftaran', function () {
    return view('pages.pendaftaran');
})->name('pendaftaran');

Route::get('/detail', function () {
    return view('pages.detail');
})->name('detail');

Route::get('/juri', function () {
    return view('pages.juri');
})->name('juri');

Route::get('/', [JuriController::class, 'home'])->name('home'); 
Route::get('/juri', [JuriController::class, 'index'])->name('juri.index');

// Rute Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Menampilkan form login
Route::post('/login', [LoginController::class, 'login']); // Proses login
// Rute untuk logout agar tetap di halaman yang sama setelah logout
Route::post('logout', function () {
    Auth::logout();
    session()->flash('success', 'Logout berhasil.');
    return redirect()->back(); // Kembali ke halaman sebelumnya
})->name('logout');

// Rute Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rute Reset Password
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::post('/daftar', [PendaftaranController::class, 'daftar'])->name('daftar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware('guest')->group(function () {
    // ...
    Route::get('auth/{provider}/redirect', [SocialiteController::class, 'loginSocial'])
        ->name('socialite.auth');
 
    Route::get('auth/{provider}/callback', [SocialiteController::class, 'callbackSocial'])
        ->name('socialite.callback');
});


