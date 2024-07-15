<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\UserxCodeController;

Route::get('/', function () {
    return view('welcome');
});

//[USUARIOS]
//[GET]
Route::get('/usuarios/get', [UserController::class, 'usuarioGet']);
//[GETID]
Route::get('/usuarios/getid/{id}', [UserController::class, 'usuarioGetID']);
//[POST]
Route::post('/usuarios/int', [UserController::class, 'usuarioInt']);
Route::get('/formulario/pu', function () {return view('usuarioviews/formularioPU');});
//[PUT]
Route::post('/usuarios/upd', [UserController::class, 'usuarioUpd']);
Route::get('/formulario/uu', function () {return view('usuarioviews/formularioUU');});
//[DELETE]
Route::delete('/usuarios/del/{id}', [UserController::class, 'usuarioDel']);
Route::get('/formulario/du', function () {return view('usuarioviews/formularioDU');});
//[LOGING]
Route::post('/usuarios/log/', [UserController::class, 'login']);
Route::get('/formulario/lu', function () {return view('usuarioviews/formularioLU');});


//[CODIGO]
//[GET]
Route::get('/codigos/get', [CodeController::class, 'codigoGet']);
//[GETID]
Route::get('/codigos/getid/{id}', [CodeController::class, 'codigoGetID']);
//[POST]
Route::post('/codigos/int', [CodeController::class, 'codigoInt']);
Route::get('/formulario/pc', function () {return view('codeviews/formularioPC');});
//[PUT]
Route::post('/codigos/upd', [CodeController::class, 'codigoUpd']);
Route::get('/formulario/uc', function () {return view('codeviews/formularioUC');});
//[DELETE]
Route::delete('/codigos/del/{id}', [CodeController::class, 'codigoDel']);
Route::get('/formulario/dc', function () {return view('codeviews/formularioDC');});


//[USUARIOXCODIGO]
//[GET]
Route::get('/usuxcode/get', [UserxCodeController::class, 'userxcodeGet']);
//[GETID]
Route::get('/usuxcode/getid/{id}', [UserxCodeController::class, 'userxcodeGetID']);
//[POST]
Route::post('/usuxcode/int', [UserxCodeController::class, 'userxcodeInt']);
Route::get('/formulario/px', function () {return view('usuxcodeviews/formularioPX');});
//[PUT]
Route::post('/usuxcode/upd', [UserxCodeController::class, 'userxcodeUpd']);
Route::get('/formulario/ux', function () {return view('usuxcodeviews/formularioUX');});
//[DELETE]
Route::delete('/usuxcode/del/{id}', [UserxCodeController::class, 'userxcodeDel']);
Route::get('/formulario/dx', function () {return view('usuxcodeviews/formularioDX');});