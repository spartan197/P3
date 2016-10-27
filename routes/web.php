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

Route::get('/', 'GeneratorController@index')->name('generators.index');
Route::get('/loremipsum', 'GeneratorController@create')->name('generators.create');
Route::post('/loremipsum', 'GeneratorController@store')->name('generators.store');
Route::get('/users', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/password', 'PasswordController@create')->name('password.create');
Route::post('/password', 'PasswordController@store')->name('password.store');
