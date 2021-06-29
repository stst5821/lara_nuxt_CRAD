<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function test1()
{   
    // return response()->json([
    //     'result' => 'Response from Laravel',
    // ]); 

    $post = Post::first();
    // dd($post);
    // $post = '俺のてすと';

    return response (
        ['result' => $post ]
    ); 
}

}
