<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Route::get('/clientes', '\App\Http\Controllers\ClienteController@index');
Route::get('/clientes/eliminar/{id}', '\App\Http\Controllers\ClienteController@eliminar');
Route::get('/viajes', '\App\Http\Controllers\ViajeController@index');
Route::get('/viajes/{id}', '\App\Http\Controllers\ViajeController@getByEmail');

// Route::get('/viajes', function () {
//     return view('viajes');
// });

// Route::get('/viajes/{id}', function ($id) {
//     return view('viajes');
// });
