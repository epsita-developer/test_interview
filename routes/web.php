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

Route::get('/', 'ProductController@list')->name('list');

Route::any('list','ProductController@list')->name('list');
Route::get('add','ProductController@add')->name('add');
Route::post('add','ProductController@save')->name('add');
Route::get('edit/{id}', 'ProductController@edit')->name('edit');
Route::get('show/{id}', 'ProductController@show')->name('show');
Route::patch('update/{id}', 'ProductController@update')->name('update');
Route::delete('delete/{id}', 'ProductController@destroy')->name('delete');


