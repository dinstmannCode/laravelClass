<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// rota pegando ou nao um id add na rul usando uma Controller
Route::get('contato/{id?}', ['uses'=>'ContatoController@index']);

// rota chamada apartir de um form POST usando uma Controller
Route::post('/contato', ['uses'=>'ContatoController@criar']);

// rota chamada apartir de um form PUT usando uma Controller
Route::put('/contato', ['uses'=>'ContatoController@editar']);