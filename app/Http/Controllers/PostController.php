<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function view()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post) 
    {
        return view('post', [
            "title" => "Post ",
            "post" => $post
        ]);
    }
}
