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

Route::get('/static-data', 'StaticJsonDataController@get');
Route::get('/data', 'DataController@get');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/', function(){
        return view('admin.home');
    });
    // Route::resource('users', 'Users')
    Route::resource('topics', 'Admin\AdminTopicsController');
    Route::resource('questions', 'Admin\AdminQuestionsController');
});