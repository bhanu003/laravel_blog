<?php

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

Route::get('/postsindex','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{posted_id}','PostsController@show');
//Route::get('/posts/{posted_id}','PostsController@addComment');

Route::post('/posts/{posted_id}/comments','CommentsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
