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

Route::post('register', 'Auth\AuthController@register');

Route::middleware('auth:api')->group(function () {
	Route::resource('conversations', 'ConversationsController', ['except' => ['create', 'edit']]);
	Route::resource('conversations.messages', 'MessagesController', ['only' => ['store', 'destroy']]);
	Route::post("settings", "AccountSettingsController@settings");
	Route::get("current_user", "AccountSettingsController@currentUser");
});
