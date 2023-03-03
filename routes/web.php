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

Route::get('/laboratorio', function () {
    return view('Laboratorio');
});

Route::get('/quemsomos', function () {
    return view('QuemSomos');
});

Route::get('/contato', function () {
    return view('Contato');
});


Route::get('/reclamacao', function () {
    return view('Reclamacao');
});
