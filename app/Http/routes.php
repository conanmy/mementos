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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PagesController@about');
Route::get('/about', 'PagesController@about');

Route::controllers([
    'auth' => 'Auth\AuthController'
]);

Route::get('/fileentry', 'FileEntryController@index');
Route::post('/fileentry/add', 'FileEntryController@add');
Route::get('/fileentry/get/{filename}', [
    'as' => 'getentry',
    'uses' => 'FileEntryController@get'
]);