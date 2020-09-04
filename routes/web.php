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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('hello', function () use ($router) {
        return "Hello World!";
    });

// Define our API route group.
$router->group(['prefix' => 'endlessrunner'], function () use ($router) {
    $router->get('scores', ['uses' => 'ScoreController@showAllScores']);
    $router->get('scores/{seed}', ['uses' => 'ScoreController@showSeedScores']);
    $router->post('scores', ['uses' => 'ScoreController@submitScore']);

    // TODO: Fix API validation/authorisation so this can be called safely.
    // $router->delete('scores/{id}', ['uses' => 'ScoreController@deleteScore']);
});
