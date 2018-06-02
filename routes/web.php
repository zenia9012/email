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



Auth::routes();

Route::get('/', 'DefaultController@index')->name('main');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{url}', ['name'=>'all', 'uses'=>'\App\Http\Controllers\DefaultController@all'])->where('url', '[a-zA-Z0-9-/]+');

