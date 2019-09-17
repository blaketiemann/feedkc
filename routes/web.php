<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/mission', 'HomeController@mission')->name('mission');


//Donor Routes
Route::middleware(['donor'])->group(function() {
    Route::get('/donate', 'DonateController@create')->name('donate.create');
    Route::post('/donate', 'DonateController@store')->name('donate.store');
    Route::get('/donations', 'DonateController@index')->name('donate.index');
    Route::get('/donation/{id}', 'DonateController@show')->name('donate.show');
    Route::put('/donation/{id}', 'DonateController@update')->name('donate.update');
    Route::delete('/donation/{id}', 'DonateController@destroy')->name('donate.delete');
});

//Requester Routes
Route::middleware(['requester'])->group(function() {
    Route::get('/request', 'RequesterController@index')->name('request.index');
    Route::get('/request/create', 'RequesterController@create')->name('request.create');
    Route::post('/request', 'RequesterController@store')->name('request.store');
    Route::get('/donation/{id}', 'RequesterController@show')->name('request.show');
    Route::put('/donation/{id}', 'RequesterController@update')->name('request.update');
    Route::delete('/donation/{id}', 'RequesterController@destroy')->name('request.delete');
});
