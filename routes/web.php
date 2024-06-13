<?php

use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\PagesController;

Route::get('/admin/login', [PagesController::class, 'index_admin'])->name('admin.login');

Route::controller(PagesController::class)->group(function () {
    Route::get('/register','index_register')->name('register');
    Route::get('/login','index_login')->name('login');
    Route::post('/','form_login')->name('login.post');
    Route::get('/','index_home')->name('home');
    //Route::get('/menu/{id}','menu_product')->name('menu_product');
    Route::prefix('menu')->group(function () {
        Route::get('/','index_menu')->name('menu');
        Route::get('/{category}','index_category')->name('category');
    });
});


