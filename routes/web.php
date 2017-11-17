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

Route::get('/newtemplate', function () {
    return view('Templates.newtemplates');
});
Route::get('/','Representante_V_Controller@index');
Route::get('/crearcliente','Representante_V_Controller@crearcliente')->name('crear_cliente');
Route::get('/identificarcliente','Representante_V_Controller@identificarcliente')->name('identificar_cliente');
Route::post('/crearcliente_p','Representante_V_Controller@crearcliente_p');
Route::post('/crearcliente_c','Representante_V_Controller@identificarcliente_buscador');
//Route::get('/Menu', function () {
//    return view('Representante_ventas/menu_representante_V_');
//});