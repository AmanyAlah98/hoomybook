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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories/create','CategoriesController@create')-> name('create-category');
Route::post('/categories/create','CategoriesController@store')-> name('store-category');
Route::get('/categories','CategoriesController@index')-> name('index-category');
Route::get('/categories/edit/{id}','CategoriesController@edit')-> name('edit-category');



