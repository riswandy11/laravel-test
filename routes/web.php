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

Route::get('/user', 'UserController@index');
Route::get('/user/add', 'UserController@add');
Route::post('/user/store','UserController@store');
Route::get('/user/view/{id}', 'UserController@show');
Route::post('/user/update','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');

Route::get('/role', 'RoleController@index');
Route::get('/role/add', 'RoleController@add');
Route::post('/role/store','RoleController@store');
Route::get('/role/view/{id}', 'RoleController@show');
Route::post('/role/update','RoleController@update');
Route::get('/role/delete/{id}','RoleController@delete');
