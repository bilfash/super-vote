<?php

Route::get('/', function () {
    return view('pages.kij.register');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('insertToken', array('before' => 'csrf', 'uses' => 'HomeController@insertToken'));