<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'SitesController@index');
Route::get('/about', 'SitesController@about');
Route::get('/contact', 'SitesController@contact');

Route::resource('articles','ArticlesController');

/*
Route::get('/articles','ArticlesController@index');
Route::get('/articles/create','ArticlesController@create');
Route::get('/articles/{id}','ArticlesController@show');
Route::get('/articles/{id}/edit','ArticlesController@edit');
Route::post('/articles','ArticlesController@store');
*/


Route::get('/auth/login','AuthController@getLogin');
Route::post('/auth/login','AuthController@postLogin');


Route::get('/auth/register','AuthController@getRegister');
Route::post('/auth/register','AuthController@postRegister');



Route::get('/auth/logout','AuthController@getLogout');







Auth::routes();

Route::get('/home', 'HomeController@index');
