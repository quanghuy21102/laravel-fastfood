<?php

use App\Http\Controllers\Backend\Admin\AdminUserController;
use App\Http\Controllers\Backend\Admin\AdminLoginController;
use App\Http\Controllers\Backend\Admin\AdminHomeController;
use App\Http\Controllers\Backend\Admin\AdminProductController;
use App\Http\Controllers\Backend\Admin\AdminUploadController;
use App\Http\Controllers\Backend\Customer\RegisterController;
use App\Http\Controllers\Backend\Customer\LoginController;
use App\Http\Controllers\Backend\Customer\HomeController;
use App\Http\Controllers\Backend\Customer\UserController;
use App\Http\Controllers\Backend\Customer\MenuController;
use App\Http\Controllers\Backend\Customer\ProductController;
use Illuminate\Support\Facades\Route;

# Thao tác với vai trò Admin
Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index']);
    Route::post('/login', [AdminLoginController::class, 'login']);

    Route::get('', [AdminHomeController::class, 'index'])->name('admin.home');

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

# Thao tác với vai trò Customer
Route::get('/register', [RegisterController::class, 'index'])->name('customer.register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'index'])->name('customer.login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('', [HomeController::class, 'index'])->name('customer.home');

Route::prefix('/menus')->group(function () {
   Route::get('/', [MenuController::class, 'index'])->name('customer.menu');
   Route::get('/{category}', [MenuController::class, 'show'])->name('customer.menu.category');
   Route::get('/{category}/{product}', [ProductController::class, 'show'])->name('customer.menu.product');
});


//Route::controller(UserController::class)->group(function () {
//    //Route::get('/product/{id}','menu_product')->name('menu_product');
//    Route::prefix('product')->group(function () {
//        Route::get('/', 'index_menu')->name('product');
//        Route::get('/{category}', 'index_category')->name('category');
//    });
//});


