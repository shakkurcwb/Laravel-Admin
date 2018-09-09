<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a given Closure or controller and enjoy the fresh air.
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function() {

    /*
    |--------------------------------------------------------------------------
    | Welcome Page
    |--------------------------------------------------------------------------
    */

    Route::get('/', 'PagesController@home')->name('home');

    /*
    |--------------------------------------------------------------------------
    | Login/ Logout/ Password
    |--------------------------------------------------------------------------
    */
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password/reset');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password/email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password/reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    /*
    |--------------------------------------------------------------------------
    | Registration & Activation
    |--------------------------------------------------------------------------
    */
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    Route::get('activate/token/{token}', 'Auth\ActivateController@activate');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('activate', 'Auth\ActivateController@showActivate')->name('activate');
        Route::get('activate/send-token', 'Auth\ActivateController@sendToken')->name('activate/send-token');
    });

    /*
    |--------------------------------------------------------------------------
    | Authenticated Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['auth', 'active']], function () {

        /*
        |--------------------------------------------------------------------------
        | General
        |--------------------------------------------------------------------------
        */

        Route::get('/users/switch-back', 'Admin\UserController@switchUserBack');

        /*
        |--------------------------------------------------------------------------
        | User
        |--------------------------------------------------------------------------
        */

        Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
            Route::get('settings', 'SettingsController@settings');
            Route::post('settings', 'SettingsController@update');
            Route::get('password', 'PasswordController@password');
            Route::post('password', 'PasswordController@update');
        });

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');

        /*
        |--------------------------------------------------------------------------
        | Team Routes
        |--------------------------------------------------------------------------
        */

        Route::get('team/{name}', 'TeamController@showByName');
        Route::resource('teams', 'TeamController', ['except' => ['show']]);
        Route::post('teams/search', 'TeamController@search');
        Route::post('teams/{id}/invite', 'TeamController@inviteMember');
        Route::get('teams/{id}/remove/{userId}', 'TeamController@removeMember');

        /*
        |--------------------------------------------------------------------------
        | Admin
        |--------------------------------------------------------------------------
        */

        Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

            Route::get('dashboard', 'DashboardController@index')->name('admin/dashboard');

            /*
            |--------------------------------------------------------------------------
            | Users
            |--------------------------------------------------------------------------
            */
            Route::resource('users', 'UserController', ['except' => ['create', 'show']]);
            Route::post('users/search', 'UserController@search');
            Route::get('users/search', 'UserController@index');
            Route::get('users/invite', 'UserController@getInvite');
            Route::get('users/switch/{id}', 'UserController@switchToUser');
            Route::post('users/invite', 'UserController@postInvite');

            /*
            |--------------------------------------------------------------------------
            | Roles
            |--------------------------------------------------------------------------
            */
            Route::resource('roles', 'RoleController', [
                'except' => [ 'show' ],
                'names' => [
                    'index' => 'admin/roles',
                    'create' => 'admin/roles/create',
                    'edit' => 'admin/roles/edit',
                ],
            ]);
            Route::post('roles/search', 'RoleController@search');
            Route::get('roles/search', 'RoleController@index');
        });
    });

});