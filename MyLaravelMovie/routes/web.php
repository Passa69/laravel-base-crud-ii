<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MovieController@movie') -> name('home');
Route::get('/movie/show/{id}', 'MovieController@show') -> name('show');

Route::get('/movie/create', 'MovieController@create') -> name('create');
Route::post('/movie/store', 'MovieController@store') -> name('store');

Route::get('/movie/edit/{id}', 'MovieController@edit') -> name('edit');
Route::post('/movie/update/{id}', 'MovieController@update') -> name('update');

Route::get('/movie/delete/{id}', 'MovieController@delete') -> name('delete');

Route::get('/movie/visible/{id}', 'MovieController@visible') -> name('visible');