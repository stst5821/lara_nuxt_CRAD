<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test1', 'PostController@test1');

Route::get('store', 'PostController@store');
Route::post('store', 'PostController@store');

Route::get('edit/{id}', 'PostController@edit');
Route::post('update', 'PostController@update');

Route::post('delete', 'PostController@delete');