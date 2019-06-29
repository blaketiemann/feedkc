<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/donate', 'DonateController');

Route::get('/request', 'HomeController@request')->name('request');

Route::get('/mission', 'HomeController@mission')->name('mission');
