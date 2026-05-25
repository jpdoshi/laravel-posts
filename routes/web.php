<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// redirect to posts list page
Route::get('/', fn () => redirect('/posts'));

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
