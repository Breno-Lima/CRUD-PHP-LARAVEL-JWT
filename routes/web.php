<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/register');
});

Route::resource('/employee', EmployeeController::class)
    ->parameters(['employee' => 'employee']);


Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('api/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

