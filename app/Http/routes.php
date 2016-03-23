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

// Route::get('/', function () {
//     return view('welcome');
// });

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
    Route::get('/', ['as' => 'web.home.index', 'uses' => 'HomeController@index']);
    Route::get('signin', ['as' => 'web.home.signin', 'uses' => 'HomeController@signin']);
    Route::get('signout', ['as' => 'web.home.signout', 'uses' => 'HomeController@signout']);
    Route::post('signin', ['as' => 'web.home.signin', 'uses' => 'HomeController@signin']);

    Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function() {
        Route::get('index', ['as' => 'web.panel.index', 'uses' => 'PanelController@index']);
        Route::get('show/{id}', ['as' => 'web.panel.show', 'uses' => 'PanelController@show']);
    });
});


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    $api->group(['namespace' => 'App\Api\Version1\Controllers', 'prefix' => 'home'], function($api) {
        $api->post('signup', ['as' => 'api.home.signup', 'uses' => 'HomeController@signup']);
        $api->post('signin', ['as' => 'api.home.signin', 'uses' => 'HomeController@signin']);
    });

    $api->group(['namespace' => 'App\Api\Version1\Controllers\Panel', 'prefix' => 'panel', 'middleware' => 'api.auth'], function($api) {
        $api->group(['prefix' => 'news'], function($api) {
            $api->get('all', ['as' => 'api.panel.news.all', 'uses' => 'NewsController@all']);
        });

        $api->group(['prefix' => 'apply'], function($api) {
            $api->post('create/step1', ['as' => 'api.panel.apply.createStep1', 'uses' => 'ApplyController@createStep1']);
            $api->post('create/step2', ['as' => 'api.panel.apply.createStep2', 'uses' => 'ApplyController@createStep2']);
        });
    });
});
