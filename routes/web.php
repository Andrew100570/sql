<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/sql', 'InformationController@index')->name('sql.index');
Route::post('/sql', 'InformationController@create')->name('sql.create');
Route::get('/api', 'InformationController@get')->name('api');
Route::get('/add', 'InformationController@add')->name('add');
Route::post('/add', 'InformationController@addFile')->name('addFile');

