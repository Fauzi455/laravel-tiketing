<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/selamat', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '244107020067 - Mohamat Fauzi Rohman';
});

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});

use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\PageController;
Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

use App\Http\Controllers\HomeController;
Route::get('/', HomeController::class);

use App\Http\Controllers\AboutController;
Route::get('/about', AboutController::class);

use App\Http\Controllers\ArticleController;
Route::get('/articles/{id}', ArticleController::class); 

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/greeting', [WelcomeController::class, 'greeting']);