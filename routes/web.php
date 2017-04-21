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

//Route::get('hb/info', 'HbController@info');
//Route::any('hb/info', ['uses' => 'HbController@info']);
Route::any('hb/info-{id?}', ['uses' => 'HbController@info']);
Route::any('hb/json', ['uses' => 'HbController@json']);
