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

//Pages
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/ministries','PagesController@ministries');
Route::get('/gallery','PagesController@gallery');
Route::get('/sermons','PagesController@sermons');
Route::get('/staff','PagesController@staff');
Route::get('/contact','PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
