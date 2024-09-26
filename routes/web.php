<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');

// ------ Authentication Pages ------
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
// ------ // Authentication Pages ------

// ------ Admin Pages ------
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');
// ------ // Admin Pages ------

// ------ Resident Pages ------
Route::get('/resident', function () {
    return view('resident.index');
})->name('resident');
// ------ // Resident Pages ------
