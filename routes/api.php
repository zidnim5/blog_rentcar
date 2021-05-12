<?php

use Illuminate\Http\Request;

Route::resource('/article', 'Api\ArticleController', ['only' =>['index', 'show']]);
Route::resource('/galery', 'Api\GaleryController', ['only' =>['index', 'show']]);
Route::resource('/contact', 'Api\ContactController', ['only' =>['index']]);
