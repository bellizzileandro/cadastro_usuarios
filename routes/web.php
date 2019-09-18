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

Route::get('/', 'WelcomeController@start')->name('welcome');

Route::get('/home', 'WelcomeController@index');

Auth::routes();

Route::resource('/users', 'UserController', ['except' => ['destroy']]);
Route::get('/users/{id}/delete', 'UserController@destroy')->name('users.destroy');