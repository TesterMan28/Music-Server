<?php

use Illuminate\Http\Request;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Articles API from https://www.toptal.com/laravel/restful-laravel-api-tutorial
/*
|--------------------------------------------------------------------------
| Route Prefix
|--------------------------------------------------------------------------
|
| The routes inside api.php will be prefixed with /api/ and the API throttling middleware will be 
| automatically applied to these routes (if you want to remove the prefix you can 
| edit the RouteServiceProvider class on /app/Providers/RouteServiceProvider.php).
|
*/

/*
|--------------------------------------------------------------------------
| Implicit Route Model Binding
|--------------------------------------------------------------------------
|
| We can improve the endpoints by using implicit route model binding. 
| This way, Laravel will inject the Article instance in our methods and automatically return a 404 if it isn’t found.
| We’ll have to make changes on the routes file and on the controller:
|
*/


Route::get('articles', 'ArticleController@index');

Route::get('articles/{article}', 'ArticleController@show');

Route::post('articles', 'ArticleController@store');

Route::put('articles/{article}', 'ArticleController@update');

Route::delete('articles/{article}', 'ArticleController@destroy');

// Register endpoint
Route::group(['prefix' => 'v1'], function() {
    Route::post('/login', 'UsersController@login');
    Route::post('/register', 'UsersController@register');
    Route::get('/logout', 'UsersController@logout')->middleware('auth:api');
});

// Songs endpoint
Route::group(['prefix' => 'v1'], function() {
    Route::get('/songs', 'SongsController@getSongs')->middleware('auth:api');
});

//Route::post('register', 'Auth\RegisterController@register');

