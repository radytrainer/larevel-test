<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

// public routes


// private routes
Route::group(['middleware' => ['auth:sanctum']], function() {

});