<?php

use Illuminate\Http\Request;

Route::resource('/article', 'Api\ArticleController', ['only' =>['index', 'show']]);