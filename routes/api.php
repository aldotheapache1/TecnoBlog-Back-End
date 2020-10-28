<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('users', 'App\Http\Controllers\api\UserController');
Route::apiResource('articles', 'App\Http\Controllers\api\ArticleController');
