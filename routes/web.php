<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/reviews', 'App\Http\Controllers\ReviewsController@index');
Route::post('/reviews', 'App\Http\Controllers\ReviewsController@store');
