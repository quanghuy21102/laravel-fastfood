<?php

use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\MenuController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.post');
Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/', [ProductController::class, 'index'])->name('product');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
