<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('listaUser','UserController@listUser');
Route::get('mostraUser/{id}','UserController@showUser');
Route::post('criaUser','UserController@createUser');
Route::put('atualizaUser/{id}','UserController@updateUser');
Route::delete('deletaUser/{id}','UserController@deleteUser');

Route::get('listaSerie','SerieController@listSerie');
Route::get('mostraSerie/{id}','SerieController@showSerie');
Route::post('criaSerie','SerieController@createSerie');
Route::put('atualizaSerie/{id}','SerieController@updateSerie');
Route::delete('deletaSerie/{id}','SerieController@deleteSerie');
