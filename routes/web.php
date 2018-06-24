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

Route::get('/', function () {
    return view('welcome');
});

$router->group(['prefix' => 'api'], function () use ($router) {
	$router->get('square/{startNumber?}/{numberFigures?}', ['uses' => 'MainController@getSquare']);
	$router->get('triangle/{startNumber?}/{numberFigures?}', ['uses' => 'MainController@getTriangle']);
});