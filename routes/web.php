<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inventory');
});

Route::get('/purchases', function () {
    return view('purchases');
});

Route::get('/orders', function () {
    return view('orders');
});