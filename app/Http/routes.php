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

Route::get('/', function () {
    return view('welcome');
});

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


Route::group(['prefix' => 'api/v1', 'middleware' =>['oauth']], function(){
	Route::resource('books', 'BookController');
});

Route::group(['prefix' => 'api/v1', 'middleware' =>['oauth', 'api']], function(){
    Route::resource('authors', 'AuthorController');
});

Route::group(['prefix' => 'api/v2', 'middleware' =>['auth:api', 'throttle:30,1']], function(){
    Route::resource('authors', 'AuthorController');
    Route::resource('books', 'BookController');
});

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
