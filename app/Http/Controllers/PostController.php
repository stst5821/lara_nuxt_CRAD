<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function test1()
    {   
        $post = Post::all();

        return response (
            ['result' => $post ]
        ); 
    }

    public function store(Request $request)
    {
        $test = $request->input('name');

        Post::create([
            'name' => $test,
            'body' => 1
        ]);
        return;
    }

    public function delete(Request $request)
    {
        $post = Post::findOrFail($request->id);
        $post->delete();
        return;
    }
}