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
Route::get('/','PopupController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/add','PopupController@add')->name('popupadd');
Route::post('/home/store','PopupController@store')->name('popupstore');
Route::get('home/delete/{id}','PopupController@delete')->name('popupdelete');
Route::get('/home/edit/{id}','PopupController@edit')->name('popupedit');
Route::put('home/update','PopupController@update')->name('popupupdate');
