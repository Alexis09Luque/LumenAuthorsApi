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

$router->get('/authors','AuthorController@index');
$router->post('/authors','AuthorController@store');
$router->get('/authors/{autor}','AuthorController@show');
$router->put('/authors/{autor}','AuthorController@update');
$router->patch('/authors/{autor}','AuthorController@update');
$router->delete('/authors/{autor}','AuthorController@destroy');