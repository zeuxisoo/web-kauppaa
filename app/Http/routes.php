<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    $api->group(['namespace' => 'App\Api\Version1\Controllers', 'prefix' => 'home'], function($api) {
        $api->post('signup', ['as' => 'api.home.signup', 'uses' => 'HomeController@signup']);
        $api->post('signin', ['as' => 'api.home.signin', 'uses' => 'HomeController@signin']);
    });

    $api->group(['namespace' => 'App\Api\Version1\Controllers\Panel', 'prefix' => 'panel'], function($api) {
        $api->group(['prefix' => 'news'], function($api) {
            $api->get('all', ['as' => 'api.panel.news.all', 'uses' => 'NewsController@all']);
        });
    });
});
