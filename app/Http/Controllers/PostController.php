<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function test1()
{   
    return response()->json([
        'result' => 'Response from Laravel',
    ]); 
}

}
