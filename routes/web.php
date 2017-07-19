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
    return view('inicio');
});


Route::get('/inicio', function () {
    return view('inicio');
});



Route::get('/registro','registroController@index');
Route::post('storeempresa','registroController@storeempresa');
Route::post('storecliente','registroController@storecliente');

//Route::resource('establecimientos','establecimientoController');


//Route::get('establecimiento','establecimientoControler@form');
//Route::get('consul_establecimiento','establecimientoControler@consultar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix'=>'admin'],function(){

        Route::resource('establecimientos','establecimientoController');
        Route::resource('admin_reg_cliente','reg_Usuario_Controller');
        Route::resource('tipoestablecimiento','tipoestablecimientoController');
});

//rutas agrupadas de la seccion de clientes
Route::group(['prefix'=>'cliente'],function(){
    
    Route::get('formactualizar',function(){
        $idclientesession=Auth::user()->id;
        $datos_clientes=DB::table('cliente')
                 ->select('idcliente','nombre','apellido','telefono','fecha_nacimiento','sexo')->where('fk_user','=',$idclientesession)->get();
               return view('cliente.actualizar',compact('datos_clientes'));
    });

    

    Route::get('index',function(){
        return view('cliente.index');
    });

    Route::Resource('actualizar','cliente\clienteController');
});
//Route::get('tipoestablecimiento/create','tipoestablecimientoController@create');
