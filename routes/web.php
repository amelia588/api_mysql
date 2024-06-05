<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', [App\Http\Controllers\ProductController::class, 'index'];
//);
use App\Http\Controllers\ProductController;

// Product Routes
Route::apiResource('products', ProductController::class);

