<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');

// ------ Authentication Pages ------

Route::middleware('guest')->group(function () {
    Route::view('/register-1', 'auth.register-1')->name('register-1');
    Route::post('/register-1', [AuthController::class, 'registerStep1']);

    Route::view('/register-2', 'auth.register-2')->name('register-2');
    Route::post('/register-2', [AuthController::class, 'registerStep2']);

    Route::get('/register-3', [AuthController::class, 'showRegisterStep3'])->name('register-3');
    Route::post('/register-3', [AuthController::class, 'registerStep3']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('resident');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// ------ Admin Pages ------
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


// ------ Resident Pages ------
// Route::get('/dashboard', function () {
//     return view('resident.index');
// })->name('resident');