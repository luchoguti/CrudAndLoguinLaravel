<?php

Route::get('/','Auth\LoginController@showLoginForm');

Route::post('login','Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('dashboard','DashboardController@index')->name('dashboard');