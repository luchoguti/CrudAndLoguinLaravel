<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::post('login','Auth\LoginController@login')->name('login');

Route::get('dashboard','DashboardController@index')->name('dashboard');