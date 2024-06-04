<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\HomeController;

//Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
//Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('/store', [LoginController::class, 'login']);
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('register', [RegisterController::class, 'index'])->name('register');
