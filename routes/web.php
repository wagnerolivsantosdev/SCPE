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
    return view('welcome');
});

Route::get('/cadastro','CadastroController@index')->name('cadastro');

Route::get('/consulta', 'ConsultaController@index')->name('consulta');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/grade','GradeController@index')->name('grade');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/registrar', 'Auth\RegistrarController@index')->name('registrar');
Route::post('/registrar', 'Auth\RegistrarController@store');

Route::get('/sair', 'Auth\LogoutController@logout')->name('logout');

Route::get('/secretaria', 'SecretariaController@index')->name('secretaria');
