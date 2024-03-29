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

Route::get('/', 'PermisoController@index');


Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {

    Route::get('inicio', 'InicioController@index')->name('inicio');
    Route::get('inicio/crear', 'InicioController@create')->name('crear');

    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear','MenuController@crear')->name('crear');
    Route::post('menu','MenuController@guardar')->name('guardar');


});
//acceso  a  menu desde  los controllers
/*Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {

    Route::get('menu/crear','MenuController@crear')->name('crear');


});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
