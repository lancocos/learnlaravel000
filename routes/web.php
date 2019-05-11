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
    Route::get('/goods/add/{id}','GoodController@edit');
    Route::post('/goods/add','GoodController@add1');
    Route::get('/redis1','RedisController@index');
    Route::get('/subscribe','RedisController@subscribe');
    Route::get('/publish','RedisController@publish');
    Route::get('/r/{name}',function($name){
        echo "r1".$name;
    })->where('name','[a-z]+');
    Route::get('/r/{id}',function($id){
        echo "r2";
    })->where('id','[0-9]+');
});
Route::get('/test/api','Hello@apitest');

