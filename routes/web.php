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

    echo "HelloWorld";
    echo "<br>";

    return $router->app->version();
});


$router->get('modelo', 'ExampleController@index');
$router->get('calcula', 'ExampleController@soma');
