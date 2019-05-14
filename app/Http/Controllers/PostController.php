<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Interfaces\PostInterface;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        dd('getting all');
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostRequest $request)
    {
        $this->post->create($request->validated());

        return redirect()->route('post.create');
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
