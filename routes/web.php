<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\UserxCodeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario/PU', function () {
    return view('formularioPU');
});

Route::get('/formulario/DU', function () {
    return view('formularioDU');
});

Route::get('/usuarios/get', [UserController::class, 'usuarioGet']);
Route::get('/usuarios/getid/{id}', [UserController::class, 'usuarioGetID']);
Route::post('/usuarios/int', [UserController::class, 'usuarioInt']);

Route::delete('/usuarios/del', [UserController::class, 'usuarioDel']);


Route::get('/codigosget', [CodeController::class, 'codigoGet']);
Route::get('/codigosgetid/{id}', [CodeController::class, 'codigoGetID']);

Route::get('/usuxcodeget', [UserxCodeController::class, 'userxcodeGet']);
Route::get('/usuxcodegetid/{id}', [UserxCodeController::class, 'userxcodeGetID']);