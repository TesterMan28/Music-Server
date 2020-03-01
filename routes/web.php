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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/ytdownload', 'PagesController@ytdownload');
// Convert .mp3 to .aac route. Temp.
Route::get('/convert', 'PagesController@convertaudio');

Route::resource('posts', 'PostsController');
Route::get('/courses', 'CoursesController@index');


//Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


