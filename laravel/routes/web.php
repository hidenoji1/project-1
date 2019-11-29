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

Route::post('/mecab/post', 'MecabController@post')->name('mecab.post');

Route::group(['prefix' => 'mecab'], function () {

    Route::get('/', [
        'uses' => 'MecabController@index',
        'as' => 'mecab.index'
    ]);
});
