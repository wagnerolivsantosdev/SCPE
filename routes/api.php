<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/cursos', 'Api\CursoController@index');
Route::post('/grades', 'Api\GradeController@index');
Route::post('/disciplinas', 'Api\DisciplinaController@index');
Route::post('/ementa', 'Api\EmentaController@index');
Route::put('/ementa', 'Api\EmentaController@update');