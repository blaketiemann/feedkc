<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/donate', 'HomeController@donate')->name('donate');

Route::get('/request', 'HomeController@request')->name('request');

Route::get('/mission', 'HomeController@mission')->name('mission');
