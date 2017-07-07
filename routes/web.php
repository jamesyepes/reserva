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
    return view('index');
});


Route::get('/inicio', function () {
    return view('inicio');
});



Route::get('/registro','registroController@index');
Route::post('storeempresa','registroController@storeempresa');
Route::post('storecliente','registroController@storecliente');

Route::resource('establecimientos','establecimientoController');


//Route::get('establecimiento','establecimientoControler@form');
//Route::get('consul_establecimiento','establecimientoControler@consultar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tipoestablecimiento','tipoestablecimientoController');
//Route::get('tipoestablecimiento/create','tipoestablecimientoController@create');
