<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::resource('/', ProductController::class)
    ->only(['index', 'store']);

Route::resource('/products', ProductController::class)
    ->only(['index', 'store', 'update', 'destroy']);

Route::resource('/purchases', PurchaseController::class)
    ->only(['index']);

Route::resource('/orders', OrderController::class)
    ->only(['index']);