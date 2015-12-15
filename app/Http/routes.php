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
    return view('welcome');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::resource('users', 'UserController', [
    'only' => ['index', 'show', 'edit', 'update']
]);

Route::resource('posts', 'PostController');

/*
Route::get('posts/','');
Route::post('posts/', '');
Route::get('posts/{id}', '');
Route::put('posts/{id}', '');
Route::delete('posts/{id}','');
Route::get('posts/{id}/comments', '');
Route::post('posts/{id}/comments', '');
*/