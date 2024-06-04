<?php

use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\HomeController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/home', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/home/product', [ProductController::class, 'index'])->name('product');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
