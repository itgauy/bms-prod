<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/homeowner-register', function () {
    return view('auth.homeowner-register');
})->name('auth.homeowner-register');

Route::get('/renter-register', function () {
    return view('auth.renter-register');
})->name('auth.renter-register');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');
