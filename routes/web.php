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

Route::get('/', 'HomeController@index');
Route::get('/community', 'CommunityController@index');
Route::get('/community/about', 'CommunityController@about');
Route::get('/community/find', 'CommunityController@find');
Route::get('/community/find/{id}', 'CommunityController@single');
Route::get('/community/post', 'CommunityController@post');
Route::get('/community/post/{id}', 'CommunityController@post');
Route::Post('/community/post', 'CommunityController@store');
Route::Post('/community/post', 'CommunityController@store');
Route::get('/community/delete/{id}', 'CommunityController@delete');






