<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentController; // Import ResidentController
use App\Http\Controllers\TempBrgyClearanceController;
use App\Http\Controllers\TempBrgyCertController;
use Illuminate\Support\Facades\Route;

// Existing web routes
Route::view('/', 'landing.index')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// ------ Authentication Pages ------
Route::middleware('auth', 'check.status')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('resident');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // Tama ba tooooo
    Route::view('/my-profile', 'resident.user-profile')->name('user-profile');

    Route::view('/profile-register', 'auth.profile-register')->name('profile-register');
    Route::post('/profile-register', [ProfileController::class, 'registerProfile'])->name('profile-register');

    // BARANGAY CLEARANCE
    Route::view('/brgy-clearance', 'auth.brgy-clearance')->name('brgy-clearance');
    Route::post('/brgy-clearance', [TempBrgyClearanceController::class, 'brgyClearance'])->name('brgy-clearance');

    // BARANGAY CERTIFICATE
    Route::view('/brgy-certificate', 'auth.brgy-certificate')->name('brgy-certificate');
    Route::post('/brgy-certificate', [TempBrgyCertController::class, 'brgyCertificate'])->name('brgy-certificate');
});

// ------ Clear session on register page ------
Route::post('/clear-session', [AuthController::class, 'clearSession'])->name('clear-session');

// ------ Admin Pages ------
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

// ------ API Routes ------
Route::prefix('api')->group(function () {
    Route::apiResource('residents', ResidentController::class);
    
    // New route for resident applications
    Route::get('resident-applications', [ResidentController::class, 'applications'])->name('resident.applications');
    Route::get('/residents/fetchAll', [ResidentController::class, 'fetchAll']);
});