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
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','IndexController@index');
Route::get('/login','IndexController@Login');
Route::post('/Manager','IndexController@Manager');
Route::get('/Register','IndexController@Register');
Route::post('/RegisterSubmit','IndexController@RegisterSubmit');

Route::get('/info','IndexController@info');
Route::get('/SearchInfo','IndexController@SearchInfo');

Route::get('/Insertstudent','IndexController@InsertStudent');

Route::get('/Alterinfo','IndexController@AlterInfo');
Route::post('/InsertStudentInfoByHand','IndexController@InsertStudentInfoByHand');


