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

Route::get('{type}', "IndexController@index");
Route::get('{type}/{id}/edit', "IndexController@edit");
Route::get('{type}/{id}/{relation}', "IndexController@relation");
