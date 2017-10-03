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

Dusterio\LumenPassport\LumenPassport::routes($app);

$app->get('/', function () use ($app) {

    //return $app->version();
    return view('teste');
});

$app->group(['prefix' => 'api/v1', 'namespace' => 'Api\V1'], function () use ($app) {

    $app->get('academies/by-address', 'AcademyController@getByAddress');
    $app->get('academies/by-coords', 'AcademyController@getByCoords');
    $app->post('classroom/vote', 'VotesController@store');
    $app->get('academies/{id:[0-9]+}/view-phone', 'AcademyController@viewPhone');


    $app->get('academies/{id:[0-9]+}', 'AcademyController@show');
    $app->get('classroom', "ClassroomController@index");
    $app->get('academies/{id:[0-9]+}/photos', 'AcademiesPhotosController@index');

    $app->post('auth/register', 'AuthController@register');
});

$app->group(['prefix' => 'api/v1', 'namespace' => 'Api\V1', 'middleware' => ['auth']], function () use ($app) {

    $app->get('academies', 'AcademyController@index');
    $app->post('academies', 'AcademyController@store');
    $app->put('academies/{id:[0-9]+}', 'AcademyController@update');
    $app->post('academies/{id:[0-9]+}', 'AcademyController@update');
    $app->delete('academies/{id:[0-9]+}', 'AcademyController@destroy');

    $app->post('academies/{id:[0-9]+}/address', 'AcademyController@address');
    $app->post('academies/{id:[0-9]+}/upload', 'AcademyController@upload');

    $app->post('academies/photos', 'AcademiesPhotosController@store');
    $app->delete('academies/photos/{id:[0-9]+}', 'AcademiesPhotosController@destroy');

    $app->get('classroom/{id:[0-9]+}', "ClassroomController@show");
    $app->post('classroom', "ClassroomController@store");
    $app->post('classroom/{id:[0-9]+}', "ClassroomController@update");
    $app->delete('classroom/{id:[0-9]+}', "ClassroomController@destroy");

    $app->get('auth/me', 'AuthController@me');
    $app->post('auth/change-password', 'AuthController@changePassword');
    $app->post('auth/edit-profile', 'AuthController@ediProfile');
    $app->get('auth/logout', 'AuthController@logout');
});
