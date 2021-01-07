<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        //eager loading two relations 
        $posts = Post::latest()->with(['user', 'likes'])->paginate(10);


        //Fetch All posts from DB
        //$posts = Post::get();

        
        return view('posts.index' , [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));
        return back();

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body'    => $request->body
        // ]);

    }


    public function destroy (Post $post)
    {

        $this->authorize('delete' , $post);
        $post->delete();
        return back();
    }
}
