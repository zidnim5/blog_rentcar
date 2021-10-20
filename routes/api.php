<?php

use Illuminate\Http\Request;

Route::get('/connecting', 'Api\TestConnectionController@index');

Route::resource('/car', 'Api\ArticleController', ['only' =>['index', 'show']]);
Route::get('/car/show/{recentpost}', 'Api\ArticleController@index');
Route::resource('/galery', 'Api\GaleryController', ['only' =>['index', 'show']]);
Route::resource('/contact', 'Api\ContactController', ['only' =>['index']]);
