<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');

// ------ Authentication Pages ------


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);


// ------ Admin Pages ------
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


// ------ Resident Pages ------
Route::get('/dashboard', function () {
    return view('resident.index');
})->name('resident');