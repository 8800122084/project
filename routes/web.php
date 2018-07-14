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

Route::get('/event', 'HomeController@index')->name('home');

Route::get('admin', 'HomeController@admin');

Route::get('event', function(){
    event(new TestEvent('hey how are you'));
});

//using route middleware in group

/*Route::group(['middleware' => ['admin']], function(){
	Route::get('admin', 'HomeController@admin');
});*/

