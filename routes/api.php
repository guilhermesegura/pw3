<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/reclamacao','ReclamacaoController@allRec');
Route::get('/laboratorio','LaboratorioController@allLab');
Route::get('/contato','ContatoController@allCont');