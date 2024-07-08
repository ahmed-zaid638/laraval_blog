<?php

namespace App\Http\Controllers;

use  App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::all();
        return view('posts.index', ["posts" => $post]);
    }
    public function show(Post $post)
    {
        return view("posts.show", ['post' => $post, 'name' => 'ahmed']);
    }

    public function create()
    {
        return view("posts.create");
    }
    public function destroy()
    {
        return "test";
    }
    public function store()
    {
        $data = $_POST;
        return to_route("posts.index");
    }
}
