<?php

Route::post('login', 'Api\ApiController@login');
Route::post('register', 'Api\ApiController@register');

Route::group(['middleware' => 'auth:api'], function () {

    Route::post('details', 'Api\ApiController@details');

});
