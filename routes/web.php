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

Route::get('/', "urlsController@indexHome");
Route::get('/reservas', "urlsController@indexReservas");
Route::get('/paquetehoteles', "urlsController@indexPaquetehoteles");
Route::get('/paqueteautos', "urlsController@indexPaqueteautos");
Route::get('/pasajes', "urlsController@indexPasajes");
Route::get('/actividades', "ActividadesController@index");
Route::get('/traslados', "urlsController@indexTraslados");
Route::resource('User', 'UserController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
