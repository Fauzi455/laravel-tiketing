<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);


// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SalesController;

// // 1. Home
// Route::get('/', [HomeController::class, 'index']);

// // 2. Products
// Route::prefix('category')->group(function () {
//     Route::get('/food-beverage', [ProductController::class, 'food']);
//     Route::get('/beauty-health', [ProductController::class, 'beauty']);
//     Route::get('/home-care', [ProductController::class, 'home']);
//     Route::get('/baby-kid', [ProductController::class, 'baby']);
// });

// // 3. User
// Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// // 4. Penjualan
// Route::get('/sales', [SalesController::class, 'index']);