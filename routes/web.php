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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ahorro', 'AhorroController@ahorroProgramado' );

Route::get('/ahorro/nuevo', 'AhorroController@ahorroNuevo' );

Route::post('/ahorro/guardar', 'AhorroController@ahorroGuardar' );

Route::get('/ahorro/ver/{ahorro}', 'AhorroController@ahorroVer');