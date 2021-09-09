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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('sns', 'Admin\TweetController@add')->middleware('auth');
    Route::get('sns', 'Admin\TweetController@index')->middleware('auth');
    Route::post('sns/create', 'Admin\TweetController@create')->middleware('auth');
    Route::get('sns/delete', 'Admin\TweetController@delete');
});
