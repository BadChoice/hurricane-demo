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

Route::get('/', "IndexController@index");
Route::get('{id}/edit', "IndexController@edit");
Route::get('posts', "IndexController@posts");
Route::get('posts/{id}/edit', "IndexController@postsEdit");
