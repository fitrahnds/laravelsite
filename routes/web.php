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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/article/{id}/{url_slug?}', 'PostsController@show');
Route::get('/article/{id}/{url_slug}/edit', 'PostsController@edit');

Route::resource('/posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'AdminController@index');
Route::get('/admin', 'AdminController@admin');
