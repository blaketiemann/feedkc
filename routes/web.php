<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/mission', 'HomeController@mission')->name('mission');

Route::resource('/donate', 'DonateController');
Route::resource('/request', 'RequesterController');
