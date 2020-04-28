<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('getdata','DataController@getData');
Route::get('getdata/{id}','DataController@findbyid');
Route::get('get/{title}','DataController@search');
Route::post('/insert','DataController@store');
Route::get('/show','DataController@show');