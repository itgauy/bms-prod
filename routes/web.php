<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'posts.index')->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');
