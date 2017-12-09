<?php

Route::post('authenticate', 'AuthenticateController@authenticate');

Route::group(['middleware' => 'jwt.auth'], function()
{
    Route::get('user', 'UserController@show');
    Route::post('user/profile/update', 'UserController@updateProfile');
    Route::post('user/password/update', 'UserController@updatePassword');

    Route::get('users',  'AuthenticateController@getUsers');
    Route::post('register',  'AuthenticateController@registerUser');

});
