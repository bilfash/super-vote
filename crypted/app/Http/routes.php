<?php

Route::get('/', function () {return view('welcome');});
Route::get('pilih', function () {return view('pilih');});
Route::get('token', function () {return view('token');});
Route::get('testapi', 'SMSController@test');
Route::post('sendsms', 'SMSController@index');
Route::post('checktoken', 'TokenController@index');
