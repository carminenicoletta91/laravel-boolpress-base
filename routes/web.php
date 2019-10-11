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

Route::get('/','ControllerBlog@index')->name('blg.index');
Route::get('/category{id}','ControllerBlog@showCategory')->name('blg.showCategory');
Route::get('/post{id}','ControllerBlog@showPost')->name('blg.showPost');
Route::get('/tag{id}','ControllerBlog@showTag')->name('blg.showTag');
Route::get('/admin/post/create','ControllerBlog@create')->name('blg.create');
Route::post('/','ControllerBlog@store')->name('blg.store');
Route::get('/admin/post/{id}/edit','ControllerBlog@edit')->name('blg.edit');
Route::post('/{id}','ControllerBlog@update')->name('blg.update');
