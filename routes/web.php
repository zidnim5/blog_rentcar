<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@loginRedirect');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('profil','ProfilController');
    Route::resource('permission','PermissionController');
    Route::delete('/roles/permission/{permission}', 'RoleController@revokePermission');
    Route::post('/roles/permission', 'RoleController@assignPermission');
});

Auth::routes();
