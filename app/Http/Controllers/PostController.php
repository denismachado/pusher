<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Http\Requests\PostRequest;
use App\Interfaces\PostInterface;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{

    public $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        return view('post.posts');
    }

    // API call for Vue.js
    public function getPosts() : JsonResponse
    {
        $posts = $this->post->getAll();
        return response()->json($posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostRequest $request)
    {
        $data = $request->validated();

        $this->post->create($data);

        event(new PostCreated($data));

        return redirect()->route('posts');
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
