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


Route::group(['prefix' => 'api/v1'], function(){
	Route::resource('books', 'BookController');
	Route::resource('authors', 'AuthorController');
});

Route::get('patient/delete/{id}', function($id){
	return "<form method='POST' action='". url("api/v1/patients/{$id}") ."'>" .
		"<input type='hidden' value='DELETE' name='_method'>" .
		"<button type='submit'>DELETE</button>" .
		"</form>";
});