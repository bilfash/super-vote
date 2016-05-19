<?php

Route::post('api', 'SMSController@haloo');
//Route::get('pilih', function () {return view('pilih');});
//Route::get('token', function () {return view('token');});
Route::post('sendsms', 'SMSController@server_decrypt');
Route::post('checktoken', 'TokenController@server_decrypt');
