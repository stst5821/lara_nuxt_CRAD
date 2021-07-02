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
        // header("Access-Control-Allow-Origin: *");
        // header("Access-Control-Allow-Headers: Origin, X-Requested-With");

        $test = $request->input('name');
        // $test = 1;
        
        Post::create([
            'name' => $test,
            'body' => 1
        ]);

        return;
    }
}