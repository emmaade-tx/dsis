<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => 'HomeController@index',
	'as'   => 'index',
]);

Route::get('item/create', [
	'uses' => 'ItemController@itemForm',
	'as'   => 'itemForm',
]);

Route::post('item/create', [
	'uses' => 'ItemController@addItem',
	'as'   => 'uploadItem',
]);

Route::post('item/search', [
	'uses' => 'SearchController@getResults',
	'as'   => 'searchItem',
]);
