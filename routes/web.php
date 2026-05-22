<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/posts', function () {
    $posts = Post::paginate();

    return view('posts.list', compact('posts'));
});

Route::get('/posts/{id}', function (string $id) {
    $post = Post::findOrFail($id);

    return view('posts.details', compact('post'));
});
