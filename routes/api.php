<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::post('input', 'API\ReportsController@input');
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');
});
Route::get('reports', 'ReportsController@index');
Route::get('report/{id}', 'ReportsController@show');
Route::put('report', 'ReportsController@store');
Route::post('report', 'ReportsController@store');
Route::delete('report/{id}', 'ReportsController@destroy');
Route::post('upload', 'ReportsController@image');
Route::get('surveys', 'FormsController@index');
Route::put('survey', 'FormsController@store');
Route::post('survey/{id}', 'FormsController@store');
Route::delete('survey/{id}', 'FormsController@destroy');

