<?php

use Illuminate\Http\Request;

Route::get('/connecting', 'Api\TestConnectionController@index');

Route::resource('/article', 'Api\ArticleController', ['only' =>['index', 'show']]);
Route::resource('/galery', 'Api\GaleryController', ['only' =>['index', 'show']]);
Route::resource('/contact', 'Api\ContactController', ['only' =>['index']]);
