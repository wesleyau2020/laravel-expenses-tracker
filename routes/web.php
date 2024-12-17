<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LogController;

Route::redirect('/', '/expenses');
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User
Route::get('change-password', [UserController::class, 'showChangePasswordForm'])->name('password.change');
Route::put('password', [UserController::class, 'updatePassword'])->name('password.update');

Route::middleware('auth')->group(function () {
    Route::resource('expenses', ExpenseController::class);
    Route::get('/logs', [LogController::class, 'index'])->name('index');
});
