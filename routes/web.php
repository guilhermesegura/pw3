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
    return view('Principal');
});

Route::get('/laboratorio', 'LaboratorioController@index');

Route::get('/quemsomos', function () {
    return view('QuemSomos');
});

Route::get('/contato', function () {
    return view('Contato');
});


Route::get('/reclamacao', 'ReclamacaoController@index');
Route::get('/reclamacao/excluir/{idRec}','ReclamacaoController@destroy');
Route::post('/reclamacao','ReclamacaoController@store');

Route::get('/contato','ContatoController@index');
Route::post('/contato','ContatoController@store');
Route::get('/contato/excluir/{idContato}','ContatoController@destroy');

Route::get('/laboratorio', 'LaboratorioController@index');
Route::get('/laboratorio/excluir/{idLab}','LaboratorioController@destroy');
Route::post('/laboratorio','LaboratorioController@store');

Route::get('/viacep', function() {
    return view('viacep');
});