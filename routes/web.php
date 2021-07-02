<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['cors'])->group(function () {
//     Route::get('test1', 'PostController@test1');
// });

// Route::get('test1', 'PostController@test1');

// // Route::middleware(['cors'])->group(function () {
//     Route::get('store', 'PostController@store');
// // });

// Route::post('store', 'PostController@store');