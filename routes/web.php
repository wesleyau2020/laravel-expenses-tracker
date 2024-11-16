<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExpenseController;

Route::resource('students', StudentController::class);
Route::resource('expenses', ExpenseController::class);
Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');