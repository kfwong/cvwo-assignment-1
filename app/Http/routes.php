<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $posts = \App\Post::all();
    return view('home', [
        'posts' => $posts
    ]);
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('posts', 'PostController', [
        'only' => ['create', 'store', 'destroy', 'update', 'edit']
    ]);
});

Route::resource('posts', 'PostController', [
    'only' => ['index', 'show']
]);

Route::resource('users', 'UserController', [
    'only' => ['index', 'show', 'edit', 'update']
]);