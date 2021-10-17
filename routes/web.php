<?php

Route::get('/admin/login', 'Auth\LoginController@loginRedirect');

Route::get('/', 'HomeController@index');
Route::get('/car', 'CarController@index');
Route::get('/car/detail', 'CarController@detail');

Route::get('/galery', 'GaleryController@index');
Route::get('/galery/detail', 'GaleryController@detail');

Route::get('/contact', 'ContactController@index');

Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function() {
    Route::get('/home', 'admin\HomeController@index');
    Route::resource('roles','admin\RoleController');
    Route::resource('users','admin\UserController');
    Route::resource('articles','admin\ArticleController');
    Route::resource('galery','admin\GaleryController');
    Route::resource('contact','admin\ContactController', ['only' => ['index', 'update']]);
    Route::resource('profil','admin\ProfilController');
    Route::resource('permission','admin\PermissionController');
    Route::delete('/roles/permission/{permission}', 'admin\RoleController@revokePermission');
    Route::post('/roles/permission', 'admin\RoleController@assignPermission');
});

Auth::routes();
