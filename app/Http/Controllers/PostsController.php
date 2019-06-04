<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()

    {
        $posts = Post::latest()->get()->take(3);

        return view('welcome',compact('posts'));
    }

    public function show (Post $post)
    {

        return view('posts.post',compact('post'));

    }

    public function create()

    {
        //
    }

    public function store()

    {
        $this->validate(request(),[

            'title'=>'required|max:255|min:2',
            'body'=>'required|max:2222|min:10',
            'post_image'=>'required'
        ]);

        $path = request('post_image')->store('', 'public');

        Post::create(['title'=>request('title'),'body'=>request('body'), 'img_name'=>$path, 'user_id'=>auth()->id()]);

        return redirect('/blog');

    }
}
