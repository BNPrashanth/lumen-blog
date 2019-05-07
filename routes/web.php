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

$router->get('/page1', function () use ($router) {
    return "Page 1";
});

$router->post('/data/1', function () use ($router) {
    return "{\"data\": 111}";
});

$router->group(['prefix' => 'api/v1'], function ($router) {

    $router->post('posts/add', 'PostsController@createPost');

    $router->get('posts/view/{id}', 'PostsController@viewPost');

    $router->put('posts/update/{id}', 'PostsController@updatePost');

    $router->delete('posts/delete/{id}', 'PostsController@deletePost');

    $router->get('posts/index', 'PostsController@index');

});
