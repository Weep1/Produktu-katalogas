<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [ProductsController::class, 'index']);
    Route::resource('products', ProductsController::class);
    Route::resource('categories', CategoryController::class);
});

Auth::routes();
