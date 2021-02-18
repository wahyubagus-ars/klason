<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::get('sign-in', 'AuthController@signUp');
    Route::post('sign-in', 'AuthController@signIn');
    Route::post('sign-up', 'AuthController@signUp');
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:siswa'],function () {
    Route::get('/', 'DashboardController@index');
});

Route::group(['prefix' => 'tugas', 'middleware' => 'auth:siswa'],function () {
    Route::get('/', 'TugasController@index');
});

Route::group(['prefix' => 'uang-kas', 'middleware' => 'auth:siswa'],function () {
    Route::get('/', 'UangKasController@index');
    Route::post('/store', 'UangKasController@store_aktivitas_pengeluaran');
});