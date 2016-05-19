<?php

Route::post('api', 'SMSController@haloo');
//Route::get('pilih', function () {return view('pilih');});
//Route::get('token', function () {return view('token');});
Route::get('sendsms', 'SMSController@index');
Route::get('checktoken', 'TokenController@index');
