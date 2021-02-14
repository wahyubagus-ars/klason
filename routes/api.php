<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::get('sign-in', 'AuthController@signUp');
    Route::post('sign-in', 'AuthController@signIn');
    Route::post('sign-up', 'AuthController@signUp');
});

// Route::middleware('auth:siswa')->group(['prefix' => 'dashboard'], function () {
//     Route::get('/', function ($id) {
//         return response()->json('hai');
//     });
// });

Route::get('/hai', function ($id) {
    return response()->json('hai');
})->middleware('auth:siswa');