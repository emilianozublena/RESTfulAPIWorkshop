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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'v1'], function() use($router) {
    $router->get('/users', 'UsersController@index');
    $router->get('/users/{id}', 'UsersController@read');
    $router->post('/users', 'UsersController@create');

    $router->get('/meetups', 'MeetupsController@index');
    $router->get('/meetups/{id}', 'MeetupsController@read');
    $router->get('/meetups/{id}/users', 'MeetupsController@users');

    $router->get('/locations', 'LocationsController@index');
});

