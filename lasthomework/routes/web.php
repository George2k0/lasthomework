<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();
Route::get('/posts/add', [App\Http\Controllers\PostController::class, 'create'])->name('posts.add');
Route::post('/posts/create', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

