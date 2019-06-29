<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/donate', 'DonateController');
Route::resource('/request', 'RequesterController');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/mission', 'HomeController@mission')->name('mission');
