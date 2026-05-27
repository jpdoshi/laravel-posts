<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// redirect to posts list page
Route::get('/', fn () => redirect('/posts'));

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/login', [UserAuthController::class, 'login'])->middleware('guest');
Route::get('/register', [UserAuthController::class, 'register'])->middleware('guest');
Route::post('/login', [UserAuthController::class, 'authenticateUser'])->middleware('guest');
Route::post('/register', [UserAuthController::class, 'store'])->middleware('guest');
Route::post('/logout', [UserAuthController::class, 'logout'])->middleware('auth');
