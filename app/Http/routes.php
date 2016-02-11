<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {
    /*Route::get('/', function () {
        return view('welcome');
    });*/

    Route::get('/', 'Crona\DashboardController@getIndex');

    //Route::controller('dashboard', 'Ragnarok\DashboardController');
});
