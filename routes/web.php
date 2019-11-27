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


Route::resource('libro', 'LibroController');
Route::resource('editorial', 'EditorialController');
Route::resource('categoria', 'CategoriaController');
Route::resource('periodo', 'SubjectYearController');

Route::get('/add/{book_id}', 'OrderController@add');

Auth::routes();
Route::get('/','LibroController@index');
