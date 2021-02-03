<?php

use Illuminate\Support\Facades\Route;

//Route::apiResource('users', 'App\Http\Controllers\api\UserController');
//Route::apiResource('articles', 'App\Http\Controllers\api\ArticleController');

Route::post('auth/login', 'App\Http\Controllers\api\AuthController@login');
Route::get('articles', 'App\Http\Controllers\api\ArticleController@index');
Route::get('article', 'App\Http\Controllers\api\ArticleController@show');
Route::post('users', 'App\Http\Controllers\api\UserController@store');

Route::group(['middleware' => ['apiJwt']], function(){
  Route::get('users', 'App\Http\Controllers\api\UserController@index');
  Route::post('auth/logout', 'App\Http\Controllers\api\AuthController@logout');
  Route::post('auth/me', 'App\Http\Controllers\api\AuthController@me');
  Route::post('articles', 'App\Http\Controllers\api\ArticleController@store');
});
