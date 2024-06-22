<?php

use App\Http\Controllers\Backend\Admin\AdminUserController;
use App\Http\Controllers\Backend\Admin\AdminLoginController;
use App\Http\Controllers\Backend\Admin\AdminHomeController;
use App\Http\Controllers\Backend\Admin\AdminProductController;
use App\Http\Controllers\Backend\Admin\AdminUploadController;
use App\Http\Controllers\Backend\User\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index']);
    Route::post('/login', [AdminLoginController::class, 'login']);

    Route::get('', [AdminHomeController::class, 'index']);

    Route::prefix('/products')->group(function () {
        Route::get('/add', [AdminProductController::class, 'create']);
        Route::post('/add', [AdminProductController::class, 'store']);
        Route::get('/list', [AdminProductController::class, 'index']);
        Route::get('/edit/{product}', [AdminProductController::class, 'edit']);
        Route::post('/edit/{product}', [AdminProductController::class, 'update']);
        Route::delete('/destroy/{product}', [AdminProductController::class, 'destroy']);
    });

    Route::prefix('/users')->group(function () {
        Route::get('/list', [AdminUserController::class, 'index'])->name('admin.users.list');
        Route::get('/info/{user}', [AdminUserController::class, 'show']);
    });

    Route::post('/upload/services', [AdminUploadController::class, 'store']);
});


Route::get('/register', [UserController::class, 'indexRegister'])->name('user.register');
Route::get('/login', [UserController::class, 'indexLogin'])->name('user.login');
Route::post('/login', [UserController::class, 'login']);
Route::get('', [UserController::class, 'indexHome'])->name('user.home');


Route::controller(UserController::class)->group(function () {
    //Route::get('/product/{id}','menu_product')->name('menu_product');
    Route::prefix('product')->group(function () {
        Route::get('/', 'index_menu')->name('product');
        Route::get('/{category}', 'index_category')->name('category');
    });
});


