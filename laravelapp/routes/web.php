<?php

use App\Http\Middleware\HelloMiddleware;

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

Route::get('hello','HelloController@index');
Route::get('hello/other','HelloController@other');
Route::get('hello/queryindex','HelloController@queryindex');
Route::get('hello/dataindex','HelloController@dataindex');
//Route::get('hello/{id?}/{pass?}','HelloController@index');


Route::get('hello/middleindex','HelloController@middleindex')->middleware('test');
Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@post');
Route::post('hello/add','HelloController@create');
Route::get('hello/edit','HelloController@edit');
Route::post('hello/edit','HelloController@update');
Route::get('hello/del','HelloController@del');
Route::post('hello/del','HelloController@remove');
Route::get('hello/show','HelloController@show');
Route::get('person','PersonController@index');
Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');
Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');
