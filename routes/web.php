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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/rooms', 'RoomController@index')->name('rooms.index');
Route::get('/rooms/show/{room_number}', 'RoomController@create')->name('rooms.create');
Route::post('/rooms/book', 'RoomController@store')->name('rooms.store');
Route::get('/rooms/book/show', 'RoomController@show')->name('rooms.show')->middleware('auth');
Route::get('/rooms/book/{booking_id}', 'RoomController@update')->name('rooms.update')->middleware('auth');
Route::post('/rooms/book/{booking_id}', 'RoomController@alter')->name('rooms.alter')->middleware('auth');
Route::get('/rooms/book/delete/{booking_id}', 'RoomController@delete')->name('rooms.delete')->middleware('auth');


Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index');
