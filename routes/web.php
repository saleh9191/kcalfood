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


Route::get('/', 'pagesController@index')->name('home');
Route::get('/products', 'pagesController@view_products');
Route::get('/pro', 'pagesController@search');
Route::post('/searchDo', 'pagesController@searchDo')->name('searchDo');

Route::get('/search_home', 'productController@search_home');

Route::get('/update_records', 'productController@update_records');


