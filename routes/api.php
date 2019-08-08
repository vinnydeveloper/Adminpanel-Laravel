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

//Pega a lista de todos usuarios
Route::get('/usuarios', "api\UsuariosController@pegarTodos");
//Pega as informações de um unico usuario
Route::get('/usuarios/{id}', 'api\UsuariosController@pegarUm');
//Cadastra um usuario
Route::post('/usuarios', 'api\UsuariosController@criarUm');
// Deleta um usuario
Route::delete('/usuarios/{id}', 'api\UsuariosController@deletarUm');
// Atualiza um usuario
Route::put('/usuarios/{id}', 'api\UsuariosController@alterarUm');
