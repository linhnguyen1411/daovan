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

Route::get('index', 'indexController@getData');
Route::post('index', 'indexController@postData');

Route::group(['prefix' => 'keywords'], function (){
    Route::get('add', 'keywordsController@getData');
    Route::post('add', 'keywordsController@postData');

    Route::get('list','keywordsController@getList');
    Route::post('list','keywordsController@postList');

    Route::get('delete/{id}','keywordsController@delete');


});
Route::get('test', 'testController@test');
Route::post('test', 'testController@test');

Route::get('meeting', 'MeetingController@getData');

