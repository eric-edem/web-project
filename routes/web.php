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

Route::get('/', "SearchController@index");
Route::post('/', "SearchController@store");


Route::get('/dvla', "DVLAController@index");
Route::get('/dvla/create', "DVLAController@create");
Route::post('/dvla', "DVLAController@store");

Route::get('/gis', "GISController@index");
Route::get('/gis/create', "GISController@create");
Route::post('/gis', "GISController@store");

Route::get('/ec', "ECController@index");
Route::get('/ec/create', "ECController@create");
Route::post('/ec', "ECController@store");