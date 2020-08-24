<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Post
Route::get('/post', 'Api\PostController@index');
Route::get('/post/{id?}', 'Api\PostController@show');
Route::get('/homepage/post', 'Api\PostController@PostHomePage');

//events
Route::get('/event', 'Api\EventController@index');
Route::get('/event/{slug?}', 'Api\EventController@show');
Route::get('/homepage/event', 'Api\EventController@EventHomePage');

//sliders
Route::get('/slider', 'Api\SliderController@index');

//tags
Route::get('/tag', 'Api\TagController@index');
Route::get('/tag/{slug?}', 'Api\TagController@show');

//category
Route::get('/category', 'Api\CategoryController@index');
Route::get('/category/{slug?}', 'Api\CategoryController@show');

//photo
Route::get('/photo', 'Api\PhotoController@index');
Route::get('/homepage/photo', 'Api\PhotoController@PhotoHomePage');

//video
Route::get('/video', 'Api\VideoController@index');
Route::get('/homepage/video', 'Api\VideoController@VideoHomePage');
