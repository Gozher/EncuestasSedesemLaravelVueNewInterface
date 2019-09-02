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
    //return view('welcome');
    return view('auth.login');
});

Route::get('/template', function () {
    //return view('welcome');
    return view('template/layout2');
});

Route::put('/updateStatusMuestra', 'MuestraController@update');

Route::resource('Muestra', 'MuestraController',['except' => ['edit','destroy','update']]);
Route::post('/genmuestra', 'MuestraController@GenMuestra');

Route::resource('Preguntas', 'PreguntasController',['except' => ['edit','update']]);
Route::put('/update', 'PreguntasController@updateQuestions');
Route::put('/updateStatus', 'PreguntasController@updateStatusQuestions');


Route::resource('Respuestas', 'RespuestasController',['except' => ['edit','update']]);
Route::put('/updateAnswer', 'RespuestasController@updateAnswer');

Route::resource('Encuesta', 'EncuestaController',['except' => ['edit','update']]);

Route::post('/graf', 'GraficasController@index');
Route::resource('Graficas', 'GraficasController',['except' => ['edit','update','destroy','show']]);

Route::get('/import-excel', 'ExcelController@viewImport')->name('importGet');
Route::post('/import-excel', 'ExcelController@importUsers')->name('importPost');;


// RUTAS DEL EJEMPLO DE VUE

Route::get('/tareas', 'TaskController@index');

Route::put('/tareas/actualizar', 'TaskController@update');

Route::post('/tareas/guardar', 'TaskController@store');

Route::delete('/tareas/borrar/{id}', 'TaskController@destroy');

Route::get('/tareas/buscar', 'TaskController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/w', function () {
    return view('welcome1');    
});

