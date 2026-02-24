<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// 1. Home
Route::get('/', [HomeController::class, 'index']);

// 2. Products
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'food']);
    Route::get('/beauty-health', [ProductController::class, 'beauty']);
    Route::get('/home-care', [ProductController::class, 'home']);
    Route::get('/baby-kid', [ProductController::class, 'baby']);
});

// 3. User
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// 4. Penjualan
Route::get('/sales', [SalesController::class, 'index']);
