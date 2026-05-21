<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::get('/posts', function () {
    $posts = Post::all();

    return view('posts-list', compact('posts'));
});

Route::get('/posts/{id}', function (string $id) {
    $post = Post::findOrFail($id);

    return view('post-details', compact('post'));
});
