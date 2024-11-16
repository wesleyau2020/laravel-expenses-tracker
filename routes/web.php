<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpenseController;

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
});
