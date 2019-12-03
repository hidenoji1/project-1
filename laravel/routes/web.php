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
    $comment = ['てすと','てすと'];
    return view('test', compact('comment'));
})->name('top');

Route::group(['prefix' => 'mecab'], function () {

    Route::get('/', [
        'uses' => 'MecabController@index',
        'as' => 'mecab.index'
    ]);

    Route::post('/post', [
        'uses' => 'MecabController@post',
        'as' => 'mecab.post'
    ]);
});

Route::post('/mecab/post', 'MecabController@post')->name('mecab.post');

Route::group(['prefix' => 'mecab'], function () {

    Route::get('/', [
        'uses' => 'MecabController@index',
        'as' => 'mecab.index'
    ]);
});
