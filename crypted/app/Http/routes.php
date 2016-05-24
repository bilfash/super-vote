<?php

Route::get('session', 'SessionController@check');
Route::get('/', function () {return view('index');});
Route::get('pilih', 'SessionController@pilih');
Route::get('dpr', 'SessionController@dpr');
Route::get('pres', 'SessionController@pres');
Route::get('token', function () {return view('token');});
Route::get('testapi', 'SMSController@test');
Route::post('sendsms', 'SMSController@index');
Route::post('checktoken', 'TokenController@index');
