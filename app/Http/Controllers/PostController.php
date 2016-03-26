<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Post;

class PostController extends Controller
{
    /**
     * Show a list of all posts.
     *
     * @return mixed
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new post.
     *
     * @return mixed
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Process a form submission to create a new post.
     *
     * @param StorePostRequest $request
     * @return mixed
     */
    public function store(StorePostRequest $request)
    {
        Post::create($request->except('_token'));

        return redirect()->route('posts.index');
    }

    /**
     * Show an individual post.
     *
     * @param Post $posts
     * @return mixed
     */
    public function show(Post $posts)
    {
        return view('posts.show')
            ->with('post', $posts);
    }
}
