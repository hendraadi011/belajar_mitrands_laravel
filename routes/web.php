<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('home'));
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/gallery', fn() => view('gallery'));


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);

Route::get('/order', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout'])->name('upload.store');
Route::post('/midtrans-callback', [OrderController::class, 'callback']);



Route::get(
    'articles/create',
    fn() =>

    Article::create([
        'title' => $title = 'my first article',
        'slug' => str($title)->slug(),
        'body' => $body = 'this is the body of my first article',
        'teaser' => $teaser
            = str($body)->limit(160),
        'meta_title' => $title,
        'meta_description' => $teaser,
    ])
);
