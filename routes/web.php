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

//Route::get('lista-electivas', function () {
//    return view('lista-electivas');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lista-electivas',  'CRUDController@listaElectivas')->name('lista-electivas');
Route::get('/agregar-electiva', 'CRUDController@agregarElectiva')->name('agregar-electiva');
Route::get('/editar-electiva',  'CRUDController@editarElectiva')->name('editar-electiva');
Route::get('/eliminar-electiva','CRUDController@eliminarElectiva')->name('eliminar-electiva');

Route::get('/enviar-correos','MailController@index')->name('enviar-correos');
Route::post('/enviar-correos','MailController@store')->name('enviar-correos');


//Route::delete('/lista-electivas/{electiva}','ElectivaController@destroy')->name('Electivas.destroy');
Route::get('lista-electivas/{codigo}/destroy','ElectivaController@destroy')->name('Electivas.destroy');
Route::get('lista-electivas/{codigo}/edit','ElectivaController@edit')->name('Electivas.edit');
Route::post('lista-electivas/{codigo}/update','ElectivaController@update')->name('Electivas.update');

Route::get('/cuadrar-horarios','horarioController@index')->name('cuadrar-horarios');

Route::post('/agregar-electiva','ElectivaController@store')->name('agregar-electiva');





//ingreso mediante un token
Route::get('/estudiante/{token}', 'horarioController@index')->name('estudiante');


Route::get('/disponibilidad-aulas','AulasController@index')->name('disponibilidad-aulas');


Route::view('/cargar-estudiantes',  '.cargar-estudiantes')->name('gestion-estudiantes');
Route::post('/cargar-estudiantes',  'EstudianteController@cargarExcel')->name('cargar-estudiantes');
Route::get('/cargar-estudiantes',  'EstudianteController@mostrarEstudianteElectiva')->name('listar-estudiantes');

Route::view('/cargar-aulas',  '.cargar-aulas')->name('gestion-aulas');
Route::post('/cargar-aulas',  'AulaController@cargarExcel')->name('cargar-aulas');
Route::get('/cargar-aulas',  'AulaController@mostrarAulas')->name('listar-aulas');
