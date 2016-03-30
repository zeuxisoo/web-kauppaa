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
    Route::get('about', ['as' => 'web.home.about', 'uses' => 'HomeController@about']);

    Route::group(['prefix' => 'news'], function() {
        Route::get('show/{id}', ['as' => 'web.news.show', 'uses' => 'NewsController@show']);
    });

    Route::group(['namespace' => 'Account', 'prefix' => 'account'], function() {
        Route::get('index', ['as' => 'web.account.index', 'uses' => 'AccountController@index']);
        Route::get('edit/profile', ['as' => 'web.account.edit_profile', 'uses' => 'AccountController@editProfile']);
        Route::post('update/profile', ['as' => 'web.account.update_profile', 'uses' => 'AccountController@updateProfile']);
        Route::get('edit/password', ['as' => 'web.account.edit_password', 'uses' => 'AccountController@editPassword']);
        Route::post('update/password', ['as' => 'web.account.update_password', 'uses' => 'AccountController@updatePassword']);
    });

    Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => 'role.user:user'], function() {
        Route::get('home', ['as' => 'web.user.home.index', 'uses' => 'HomeController@index']);

        Route::group(['prefix' => 'apply'], function() {
            Route::get('index', ['as' => 'web.user.apply.index', 'uses' => 'ApplyController@index']);
            Route::get('create', ['as' => 'web.user.apply.create', 'uses' => 'ApplyController@create']);
            Route::post('store', ['as' => 'web.user.apply.store', 'uses' => 'ApplyController@store']);
            Route::get('show/{id}', ['as' => 'web.user.apply.show', 'uses' => 'ApplyController@show']);
        });
    });

    Route::group(['namespace' => 'Financier', 'prefix' => 'financier', 'middleware' => 'role.financier:financier'], function() {
        Route::get('home', ['as' => 'web.financier.home.index', 'uses' => 'HomeController@index']);

        Route::group(['prefix' => 'application'], function() {
            Route::get('index', ['as' => 'web.financier.application.index', 'uses' => 'ApplicationController@index']);
            Route::get('matched', ['as' => 'web.financier.application.matched', 'uses' => 'ApplicationController@matched']);
            Route::get('approved', ['as' => 'web.financier.application.approved', 'uses' => 'ApplicationController@approved']);
        });
    });

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
        Route::get('/', ['as' => 'web.admin.home.index', 'uses' => 'HomeController@index']);
        Route::post('signin', ['as' => 'web.admin.home.signin', 'uses' => 'HomeController@signin']);
        Route::get('signout', ['as' => 'web.admin.home.signout', 'uses' => 'HomeController@signout']);

        Route::group(['middleware' => 'role.admin:admin'], function() {
            Route::group(['prefix' => 'dashboard'], function() {
                Route::get('/', ['as' => 'web.admin.dashboard.index', 'uses' => 'DashboardController@index']);
            });

            Route::group(['prefix' => 'news'], function() {
                Route::get('/create', ['as' => 'web.admin.news.create', 'uses' => 'NewsController@create']);
                Route::post('/store', ['as' => 'web.admin.news.store', 'uses' => 'NewsController@store']);
                Route::get('/manage', ['as' => 'web.admin.news.manage', 'uses' => 'NewsController@manage']);
                Route::get('/edit/{id}', ['as' => 'web.admin.news.edit', 'uses' => 'NewsController@edit']);
                Route::post('/update', ['as' => 'web.admin.news.update', 'uses' => 'NewsController@update']);
                Route::post('/destroy', ['as' => 'web.admin.news.destroy', 'uses' => 'NewsController@destroy']);
            });

            Route::group(['prefix' => 'site'], function() {
                Route::get('/edit/about-us', ['as' => 'web.admin.site.edit_about_us', 'uses' => 'SiteController@editAboutUs']);
                Route::post('/edit/about-us', ['as' => 'web.admin.site.update_about_us', 'uses' => 'SiteController@updateAboutUs']);
                Route::get('/edit/contact-us', ['as' => 'web.admin.site.edit_contact_us', 'uses' => 'SiteController@editContactUs']);
                Route::post('/edit/contact-us', ['as' => 'web.admin.site.update_contact_us', 'uses' => 'SiteController@updateContactUs']);
            });

            Route::group(['prefix' => 'apply'], function() {
                Route::get('manage/{status}', ['as' => 'web.admin.apply.manage', 'uses' => 'ApplyController@manage']);
                Route::get('show/{id}', ['as' => 'web.admin.apply.show', 'uses' => 'ApplyController@show']);
                Route::get('edit/{id}', ['as' => 'web.admin.apply.edit', 'uses' => 'ApplyController@edit']);
                Route::post('update/{id}', ['as' => 'web.admin.apply.update', 'uses' => 'ApplyController@update']);
            });
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
