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
    return json_encode('Server base');
});

$router->get('adicao', 'CalculadoraController@adicao');
$router->get('subtracao', 'CalculadoraController@subtracao');
$router->get('multiplicacao', 'CalculadoraController@multiplicacao');
$router->get('divisao', 'CalculadoraController@divisao');

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function($router){
    $router->get('/', function () use ($router) {
        return json_encode('Server base');
    });

    $router->get('/users', 'Api\UsersController@index');
    $router->get('/users/{id}', 'Api\UsersController@show');
    $router->post('/users', 'Api\UsersController@store');
    $router->put('/users/{id}', 'Api\UsersController@update');
    $router->delete('/users/{id}', 'Api\UsersController@destroy');
});
