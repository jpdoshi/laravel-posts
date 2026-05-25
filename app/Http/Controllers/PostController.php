<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:20',
            'author' => 'required|min:8',
            'poster_url' => 'required',
            'category' => 'required|min:2',
        ]);

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function search(Request $request)
    {
        // $posts = Post::where('title', 'LIKE', "%{$request->query('q')}%")->paginate();
        $posts = Post::query()
            ->when($request->filled('q'), function ($query) use ($request) {
                $query->where('title', 'LIKE', '%'.trim($request->query('q')).'%');
            })
            ->paginate();

        return view('posts.index', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
