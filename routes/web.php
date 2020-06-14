<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) { return "Amigo do Caminhoneiro!"; });
$router->post('/register'	,'UsersController@register');
$router->post('/user/{id}'	,'UsersController@login');

$router->group(['prefix' => 'api'], function () use ($router) 
{
	$class='Cambio';	
	$path='/cambio';

	$router->get		($path,  		['uses' => $class.'Controller@showAll']);
	$router->get		($path.'/{id}', 	['uses' => $class.'Controller@showOne']);
	$router->get		($path.'/inbox/{id}', 	['uses' => $class.'Controller@showInbox']);
	$router->post		($path, 		['uses' => $class.'Controller@create']);
	$router->delete		($path.'/{id}', 	['uses' => $class.'Controller@delete']);
	$router->put		($path.'/{id}', 	['uses' => $class.'Controller@update']);
});
