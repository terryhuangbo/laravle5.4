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
Route::any('index/index', ['uses' => 'indexController@index'])->name('index');
//Route::any('index/login', ['uses' => 'indexController@login'])->name('login');
//Route::any('index/home', ['uses' => 'indexController@home'])->name('home');

//home
Route::any('home', function () {
    return view('home');
})->name('home');

//login
Route::any('login', function () {
    return view('login');
})->name('login');

//test
Route::any('test', function () {
    return view('test');
})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index');
