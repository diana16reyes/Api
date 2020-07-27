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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

// });

Route::get('show','usuariosController@show');

Route::get('showRelations','usuariosController@showRelations');

Route::get('showById/{usuario_id}','usuariosController@showById');

Route::get('showMarcas','usuariosController@showMarcas');

Route::get('showModelos','usuariosController@showModelos');

Route::post('store','usuariosController@store'); //crear uno nuevo

Route::post('newStore','usuariosController@newStore');

Route::put('update/{usuario_id}','usuariosController@upDate');

Route::delete('delete/{usuario_id}','usuariosController@delete');

Route::delete('forceDelete/{usuario_id}','usuariosController@forceDelete');

Route::patch('restore/{usuario_id}','usuariosController@restore');
