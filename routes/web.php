<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');

// ------ Authentication Pages ------
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/homeowner-register', function () {
    return view('auth.homeowner-register');
})->name('auth.homeowner-register');

Route::get('/renter-register', function () {
    return view('auth.renter-register');
})->name('auth.renter-register');
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
