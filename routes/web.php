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
Route::group(['middleware'=>'web'],function(){
    Route::get('/hello','Hello@index');
    Route::get('/test','Test@index');
    Route::get('/hello1','Hello@index1');
    Route::get('/goods','GoodController@index');
    Route::get('/goods/detail','GoodController@detail');
    Route::get('/goods/add','GoodController@add');
    Route::post('/goods/add','GoodController@add1');
});

