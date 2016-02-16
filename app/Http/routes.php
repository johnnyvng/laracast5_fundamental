<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Blade::setContentTags('<%', '%>');				// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');		// for escaped data

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function() {
	return 'bar';
});

Route::get('articles', 'ArticlesController@index');

Route::get('articles/create', 'ArticlesController@create');

// {} need to register at the bottom otherwise laravel will load var in the wildcard {id} first
Route::get('articles/{id}', 'ArticlesController@show');

// Store new article 
Route::post('articles', 'ArticlesController@store');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
