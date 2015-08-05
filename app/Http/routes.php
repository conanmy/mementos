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
    return redirect('/pic');
});

Route::get('/home', 'PagesController@about');

Route::controllers([
    'auth' => 'Auth\AuthController'
]);

Route::get('/fileentry', 'FileEntryController@index');
Route::post('/fileentry/add', 'FileEntryController@add');
Route::get('/fileentry/get/{filename}', [
    'as' => 'getentry',
    'uses' => 'FileEntryController@get'
]);

Route::get('/pic', 'PicController@index');
Route::get('/pic/add/{filename}', [
    'as' => 'addpic',
    'uses' => 'PicController@add'
]);
Route::post('/pic/store', 'PicController@store');
Route::get('/pic/edit/{picid}', 'PicController@edit');
Route::post('/pic/update/', 'PicController@update');

Route::get('/about', 'AboutController@index');
Route::get('/about/create', 'AboutController@create');
Route::get('/about/edit', 'AboutController@edit');
Route::post('/about/store', 'AboutController@store');
Route::post('/about/update', 'AboutController@update');