<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {

        //dashboard
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', 'Admin\PermissionController', ['except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin']);

        //roles
        Route::resource('/role', 'Admin\RoleController', ['except' => ['show'], 'as' => 'admin']);

        //users
        Route::resource('/users', 'Admin\UserController', ['except' => ['show'], 'as' => 'admin']);

        //tags
        Route::resource('/tag', 'Admin\TagController', ['except' => 'show', 'as' => 'admin']);

        //categories
        Route::resource('/category', 'Admin\CategoryController', ['except' => 'show', 'as' => 'admin']);

        //posts
        Route::resource('/post', 'Admin\PostController', ['except' => 'show', 'as' => 'admin']);

        //event
        Route::resource('/event', 'Admin\EventController', ['except' => 'show', 'as' => 'admin']);

        //photo
        Route::resource('/photo', 'Admin\PhotoController', ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //video
        Route::resource('/video', 'Admin\VideoController', ['except' => 'show', 'as' => 'admin']);

        //slider
        Route::resource('/slider', 'Admin\SliderController', ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);
    });
});
