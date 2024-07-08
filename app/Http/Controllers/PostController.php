<?php

namespace App\Http\Controllers;

use App\Models\User;

use  App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    //index
    public function index()
    {
        $post = Post::all();
        return view('posts.index', ["posts" => $post]);
    }
    // show
    public function show(Post $post)
    {
        return view("posts.show", ['post' => $post, 'name' => 'ahmed']);
    }
    //  create
    public function create()
    {
        $users = User::all();
        return view("posts.create", ['users' => $users]);
    }
    //  edit
    public function edit(Post $post)
    {
        $users = User::all();
        return view("posts.edit", ["users" => $users, "post" => $post]);
    }
    // update
    public function update(Request $request, $postId)
    {
        dd('gggggg');
        // retrive data
        $request = Request();
        $title = $request->input("title");
        $description = $request->input("description");
        $posted_by = $request->input("posted_by");

        $singlePost = Post::find(1);
        dd($singlePost);



        // return to_route("posts.show" , 1) ;
    }
    // destroy
    public function destroy(Post $post)
    {
        if ($post) {
            $post->delete();
        }

        return back();
    }
    // store
    public function store()
    {
        // retrieve data from user
        $request = Request();
        $title = $request->input("title");
        $description = $request->input("description");
        $posted_by = $request->input("posted_by");
        //store data into database
        $post = new Post;
        $post->title = $title;
        $post->description = $description;
        $post->posted_by = $posted_by;
        $post->save();


        return to_route("posts.index");
    }
}
