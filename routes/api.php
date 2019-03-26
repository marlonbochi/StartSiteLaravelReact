<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('login', 'API\UserController@login');
Route::group(['middleware' => 'auth:api'], function () {
    // User
    Route::post('user/details', 'API\UserController@details');
    Route::post('user/register', 'API\UserController@register');
    Route::post('user/edit', 'API\UserController@edit');
    Route::post('user/delete', 'API\UserController@delete');

    // Profile
    Route::post('profile/create', 'API\ProfileController@create');
    Route::post('profile/find', 'API\ProfileController@find');
    Route::post('profile/edit', 'API\ProfileController@edit');
    Route::post('profile/delete', 'API\ProfileController@delete');

    // Module
    Route::post('module/create', 'API\ModuleController@create');
    Route::post('module/find', 'API\ModuleController@find');
    Route::post('module/edit', 'API\ModuleController@edit');
    Route::post('module/delete', 'API\ModuleController@delete');
});