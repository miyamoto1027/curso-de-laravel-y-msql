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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('permiso/{nombre}/{slug?}','PermisoController@index');
Route::get('permiso','PermisoController@index')->name('permisos');

Route::get('admin/sistema/permiso','PermisoController@create')->name('administrador');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
