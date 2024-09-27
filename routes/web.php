<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');

// ------ Authentication Pages ------

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('resident');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ------ Admin Pages ------
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


// ------ Resident Pages ------
// Route::get('/dashboard', function () {
//     return view('resident.index');
// })->name('resident');