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
Route::get('/getUsers', 'PagesController@getUsers');
Route::post('/addUser', 'PagesController@addUser');
Route::post('/updateUser', 'PagesController@updateUser');
Route::get('/deleteUser/{id}', 'PagesController@deleteUser');
