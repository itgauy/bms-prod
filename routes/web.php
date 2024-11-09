<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');

// ------ Authentication Pages ------

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth', 'check.status')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('resident');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::view('/register-2', 'auth.register-2')->name('register-2');
});

// ------ Clear session on register page ------
Route::post('/clear-session', [AuthController::class, 'clearSession'])->name('clear-session');

// ------ Admin Pages ------
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


// ------ Resident Pages ------
// Route::get('/dashboard', function () {
//     return view('resident.index');
// })->name('resident');