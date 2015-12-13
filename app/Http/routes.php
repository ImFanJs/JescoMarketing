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

Route::get('/', 'WelcomeController@index');

Route::get('servicios', 'WelcomeController@servicios');

Route::get('contacto', 'WelcomeController@contacto');

Route::get('pedido', 'WelcomeController@pedido');

Route::get('portafolio', 'WelcomeController@construccion');

Route::get('blog', 'WelcomeController@construccion');

Route::get('promociones', 'WelcomeController@construccion');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

