<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [UserController::class, 'home']);
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::delete('/logout', [UserController::class, 'logout'])->name('logout');
});