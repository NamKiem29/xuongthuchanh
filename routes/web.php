<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

// Login
Route::prefix('')->group(function(){
    Route::get('/login', [AuthenticationController::class, 'showLogin'])->name('login');
    Route::post('/userlogin', [AuthenticationController::class, 'postLogin'])->name('userlogin');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthenticationController::class, 'register'])->name('register');
    Route::post('/post-register', [AuthenticationController::class, 'saveRegister'])->name('saveRegister');
});

// Hiển thị admin
Route::prefix('admin')->as('admin.')->middleware(['auth', 'Admin'])->group(function () {
    Route::prefix('products')->as('products.')->group(function () {
        Route::get('list-product', [ProductController::class, 'showProduct'])->name('list-product');
        // Chi tiết sản phẩm
        Route::get('detail-product/{product_id}', [ProductController::class, 'detailProduct'])->name('detail-product');
        // Thêm sản phẩm
        Route::get('form-add-product', [ProductController::class, 'addProduct'])->name('form-add-product');
        Route::post('save-product', [ProductController::class, 'saveProduct'])->name('save-product');
        // Xóa Sp
        Route::get('delete-product/{product_id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
        // Update sp
        Route::get('form-update-product/{idProduct}', [ProductController::class, 'updateForm'])->name('form-update-product');
        Route::patch('save-update-product/{idProduct}', [ProductController::class, 'updateProduct'])->name('save-update-product');
    });
});
// Hiển thị client
Route::prefix('client')->as('client.')->group(function () {   
        Route::get('home', [HomeController::class, 'home'])->name('home');
    
});
