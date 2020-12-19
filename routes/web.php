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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'CookingController@index');

Route::get('/side_dish', 'CookingController@side');

Route::get('/detail/{id}', 'CookingController@detail');

Route::get('/add_data', 'CookingController@add');

//Route::post('/add_data', 'PostsController@store');
 
//共用get
Route::get('/item/edit', 'ItemController@edit')->name('item.edit');
//新規作成
Route::post('/item/create', 'ItemController@create')->name('item.create');
//編集
Route::get('/item/detail/{id}', 'ItemController@detail')->name('item.detail');
Route::post('/ItemController@edit')->name('item.edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
