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

Route::view('/', 'welcome');
Route::view('about', 'about');
Route::view('contact', 'contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/oil',  'OilController@index')->name('home');
Route::get('/mech', 'HomeController@mechanic')->middleware('mechanic');


Route::get('/mechanic', 'MechanicController@index');
Route::get('/mechanic/create', 'MechanicController@create');
Route::post('/mechanic', 'MechanicController@store');
Route::get('/mechanic/{mechanic}', 'MechanicController@show');
Route::get('/mechanic/{mechanic}/edit', 'MechanicController@edit');
Route::patch('/mechanic/{mechanic}', 'MechanicController@update');
Route::delete('/mechanic/{mechanic}', 'MechanicController@destroy');

Route::get('/comment', 'CommentController@index');
Route::get('/comment/create', 'CommentController@create');
Route::post('/comment', 'CommentController@store');
Route::get('/comment/{comment}', 'CommentController@show');
Route::get('/comment/{comment}/edit', 'CommentController@edit');
Route::patch('/comment/{comment}', 'CommentController@update');
Route::delete('/comment/{comment}', 'CommentController@destroy');

Route::resource('/request', 'MakerequestController');
Route::get('/requestall/{mechanic}', 'MakerequestController@showall');

Route::get('/like', 'LikeController@index');
Route::get('/like/create', 'LikeController@create');
Route::post('/like', 'LikeController@store');
Route::get('/like/{like}', 'LikeController@show');
Route::get('/like/{like}/edit', 'LikeController@edit');
Route::patch('/like/{like}', 'LikeController@update');
Route::delete('/like/{like}', 'LikeController@destroy');

Route::get('/review', 'ReviewController@index');
Route::get('/review/create', 'ReviewController@create');
Route::post('/review', 'ReviewController@store');
Route::get('/review/{review}', 'ReviewController@show');
Route::get('/review/{review}/edit', 'ReviewController@edit');
Route::patch('/review/{review}', 'ReviewController@update');
Route::delete('/review/{review}', 'ReviewController@destroy');

Route::resource('/service', 'ServiceController');