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

Route::get('/', 'SiteController@showIndex');

Route::get('/new', 'SiteController@showNewPaste');
Route::post('/new', 'SiteController@newPaste');

Route::get('/{paste}', 'SiteController@showPaste');
Route::get('/{paste}/edit', 'SiteController@showEditPaste');
Route::post('/{paste}/edit', 'SiteController@editPaste');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
