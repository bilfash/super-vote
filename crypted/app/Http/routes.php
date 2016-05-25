<?php

Route::get('session', 'SessionController@check');
Route::get('/', function () {
    if (Session::has('avafiore')){
        return redirect('pilih');
    }
    return view('index');
});
Route::get('token', function () {
    if (Session::has('avafiore')){
        return redirect('pilih');
    }
    return view('token');
});
Route::get('pilih', 'SessionController@pilih');
Route::get('dpr', 'SessionController@dpr');
Route::get('pres', 'SessionController@pres');
Route::get('testapi', 'SMSController@test');
Route::post('sendsms', 'SMSController@index');
Route::post('checktoken', 'TokenController@index');
