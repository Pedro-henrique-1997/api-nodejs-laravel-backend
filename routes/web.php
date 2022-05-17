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

Route::get('usuarios/index', 'UsuarioController@index')->name('index');
Route::get('usuarios/show/{id}', 'UsuarioController@show')->name('ver_usuario');
Route::get('usuarios/cadastro', 'UsuarioController@create')->name('cadastrar_usuario');
Route::post('usuarios/cadastro', 'UsuarioController@store')->name('validar_usuario');
Route::get('usuarios/editar/{id}', 'UsuarioController@edit')->name('editar_usuario');
Route::post('usuarios/editar/{id}', 'UsuarioController@update')->name('validarEdit_usuario');
Route::get('/usuarios/excluir/{id}', 'UsuarioController@delete');

Route::post('usuarios/excluir/{id}', 'UsuarioController@destroy')->name('excluir_usuario');

Route::get('/', function () {
    return view('welcome');
});
