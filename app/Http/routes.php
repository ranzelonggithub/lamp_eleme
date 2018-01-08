<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//前台路由组
Route::group(['prefix'=>'home','namespace'=>'home'],function(){

});

//店铺路由组
Route::group(['prefix'=>'shop','namespace'=>'shop'],function(){
	Route::get('/test','testController@test');
});

//系统路由组
Route::group(['prefix'=>'sys','namespace'=>'sys'],function(){
	Route::get('/index','testController@test');
	Route::get('/index','testController@test');
	Route::get('/index','testController@test');
	Route::get('/index','testController@test');
});

Route::get('/test1', function () {
    return view('test1');
});
Route::get('/test2', function () {
    return view('test2');
});
Route::get('/abc',function() {
    echo '123' ;
}) ;

Route::get('/aaa',function() {
    echo '123' ;
}) ;
Route::get('/bbb',function() {
    echo '123' ;
}) ;
Route::get('/ccc',function() {
    echo '123' ;
}) ;

