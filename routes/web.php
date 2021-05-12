<?php

Route::get('/', 'Auth\LoginController@loginRedirect');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('articles','ArticleController');
    Route::resource('galery','GaleryController');
    Route::resource('contact','ContactController', ['only' => ['index', 'update']]);
    Route::resource('profil','ProfilController');
    Route::resource('permission','PermissionController');
    Route::delete('/roles/permission/{permission}', 'RoleController@revokePermission');
    Route::post('/roles/permission', 'RoleController@assignPermission');
});

Auth::routes();
