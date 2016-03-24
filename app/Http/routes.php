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
    Route::post('signin', ['as' => 'web.home.signin', 'uses' => 'HomeController@doSignin']);
    Route::get('signup', ['as' => 'web.home.signup', 'uses' => 'HomeController@signup']);
    Route::post('signup', ['as' => 'web.home.signup', 'uses' => 'HomeController@doSignup']);
    Route::get('signout', ['as' => 'web.home.signout', 'uses' => 'HomeController@signout']);

    Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => 'role.user:user'], function() {
        Route::get('home', ['as' => 'web.user.home.index', 'uses' => 'HomeController@index']);

        Route::group(['prefix' => 'apply'], function() {
            Route::get('index', ['as' => 'web.user.apply.index', 'uses' => 'ApplyController@index']);
            Route::get('show/{id}', ['as' => 'web.user.apply.show', 'uses' => 'ApplyController@show']);
        });
    });


    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
        Route::get('/', ['as' => 'web.admin.index', 'uses' => 'HomeController@index']);
        Route::post('signin', ['as' => 'web.admin.signin', 'uses' => 'HomeController@signin']);

        Route::group(['prefix' => 'dashboard', 'middleware' => 'role.custom:admin'], function() {
            Route::get('/', ['as' => 'web.admin.dashboard.index', 'uses' => 'DashboardController@index']);
            Route::get('show/{id}', ['as' => 'web.admin.dashboard.show', 'uses' => 'DashboardController@show']);
            Route::get('edit/{id}', ['as' => 'web.admin.dashboard.edit', 'uses' => 'DashboardController@edit']);
            Route::post('update/{id}', ['as' => 'web.admin.dashboard.update', 'uses' => 'DashboardController@update']);
        });
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
