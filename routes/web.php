<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', compact('posts'));
});
