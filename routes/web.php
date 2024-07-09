<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'home'])->name('user-dashboard');
Route::get('/user/register', [UserController::class, 'register'])->name('user-register');
Route::post('/user/register/post', [UserController::class, 'registerPost'])->name('user-register-post');
Route::get('/user/login', [UserController::class, 'login'])->name('user-login');
Route::post('/user/login/post', [UserController::class, 'loginPost'])->name('user-login-post');
Route::get('/user/logout', [UserController::class, 'userLogout'])->name('user-logout');

