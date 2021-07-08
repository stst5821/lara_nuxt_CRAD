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
        $data = $request;

        Post::create([
            'name' => $data->name,
            'body' => $data->body,
        ]);
        return;
    }

    public function edit(Request $request)
    {
        $post = Post::findOrFail($request->id);
        // $post = Post::all();

        return response (
            ['result' => $post ]
        ); 
    }

    public function delete(Request $request)
    {
        $post = Post::findOrFail($request->id);
        $post->delete();
        return;
    }
}