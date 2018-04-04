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

Route::get('/','TestController@getIndex');
    


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BaseController@getIndex');

Route::get('/articles', 'BaseController@getStatics');
Route::post('/home/add','HomeController@postIndex');
Route::get('home/delete/{id}','HomeController@getDelete');
Route::get('home/edit/{id}','HomeController@getEdit')->where('id','[0-9]');
Route::post('home/edit/{id}','HomeController@postEdit')->where('id','[0-9]');
Route::get('/songs','SongController@getIndex');
Route::get('/songs/{id}','SongController@getOne');
Route::get('/music','MusicController@getIndex');
Route::get('/music/{id}','MusicController@getOne');
Route::get('/news','NewsController@getIndex');
Route::get('/news/{id}','NewsController@getOne');
Route::get('/products','ProductController@getIndex');
Route::get('/search','SearchController@getSearch');
Route::post('parse/google','AjaxController@postGoogle');
Route::get('{id}', 'BaseController@getStatic');// Всегда ставится последним
