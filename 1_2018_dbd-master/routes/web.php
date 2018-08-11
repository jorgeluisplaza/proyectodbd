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

Route::get('/reservas', function () {
    return "Compra tu reserva.";
});

Route::get('/paquetehoteles', function () {
    return "Compra tu paquete + hotel.";
});

Route::get('/paqueteautos', function () {
    return "Compra tu paquete + auto.";
});

Route::get('/pasajes', function () {
    return "Compra tu pasaje.";
});

Route::get('/actividades', function () {
    return "Compra tu actividad.";
});

Route::get('/traslados', function () {
    return "Compra tu traslado.";
});

Route::get('/ticket/{id}/{nombre}', function ($id, $nombre) {
    return "Este es el tickets n°: ". $id." a nombre de: " .$nombre;
})->where('nombre','[a-zA-Z]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
