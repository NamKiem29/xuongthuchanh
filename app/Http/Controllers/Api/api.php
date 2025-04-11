<?php 

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix("product")->group(function(){
    Route::get('/', [ProductController::class, 'showProduct']);
    Route::get('detail-product/{product_id}', [ProductController::class, 'detailProduct']);
    Route::post('add-product', [ProductController::class, 'addProduct']);
    Route::put('update-product/{product_id}', [ProductController::class, 'updateProduct']);
    Route::delete('delete-product/{product_id}', [ProductController::class, 'deleteProduct']);
});