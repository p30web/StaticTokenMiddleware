<?php

use Illuminate\Support\Facades\Route;

Route::prefix('test_static_token')
    ->namespace('App\Http\Controllers\API')
    ->middleware('static-token')
    ->group(function () {
        Route::post('check_token', 'StaticTokenController@checkToken');
    });
