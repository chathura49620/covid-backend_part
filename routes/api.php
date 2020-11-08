<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


Route::group(['middleware' => ['web']], function () {
    //auth rotes
    Auth::routes();
    //rotes for adding posts
    Route::get('/all-posts', 'PostController@index');
    Route::post('/create-posts/{user_email}', 'PostController@addPosts');

});

