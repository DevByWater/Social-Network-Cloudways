<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('blade', 'PagesController@blade');

Route::group(['middleware' => 'authenticated'], function (){
    Route::get('profile', 'PagesController@profile');
    Route::get('users', 'UsersController@index');
});

Route::get('settings', 'PagesController@settings');

Route::get('users/create', ['uses'=>'UsersController@create']);

Route::post('users', ['uses'=>'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index');
