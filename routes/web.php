<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@show');
Route::get('/reviews', 'App\Http\Controllers\ReviewsController@show');
Route::post('/reviews', 'App\Http\Controllers\ReviewsController@store');
Route::get('/reviews/create', 'App\Http\Controllers\ReviewsController@create');
