<?php

use Illuminate\Http\Request;

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

// Public routes
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

// Need authentification routes
Route::group(['middleware' => 'auth:api'], function(){
	
});
