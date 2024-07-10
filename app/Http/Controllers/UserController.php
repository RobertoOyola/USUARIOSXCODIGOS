<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function usuarioGet()
    //TODOS USUARIOS GET
    {
        $usersData = DB::select('CALL USUARIO_GET()');
        
        echo "<pre>";
        print_r($usersData);
    }

    //UNICO USUARIO GET
    public function usuarioGetID($user_id){
        
        $data = DB::select("CALL USUARIO_GETID(".$user_id.")");

        echo "<pre>";
        print_r($data);
    }

    // INSERT USUARIO
    public function usuarioInt(Request $request)
    {
        $id_usuxcod = $request->input('ID_USUXCOD');
        $nombre = $request->input('NOMBRES');
        $apellido = $request->input('APELLIDOS');
        $fechanacimiento = $request->input('FECHA_NACIMIENTO');
        $usuariocreacion = $request->input('USUARIO_CREACION');

        DB::statement("CALL USUARIO_INTO(?, ?, ?, ?, ?)", [
            $id_usuxcod,
            $nombre,
            $apellido,
            $fechanacimiento,
            $usuariocreacion
        ]);

        return "Usuario insertado correctamente.";
    }

    // DELETE USUARIO
    public function usuarioDel(Request $request)
    {
        $id_usuxcod = $request->input('ID_USUARIO ');
        $usuario_modificacion = $request->input('USUARIO_MODIFICACION');

        DB::statement("CALL USUXCOD_DEL(?, ?)", [
            $id_usuxcod,
            $usuario_modificacion
        ]);

        return "Usuario eliminado correctamente.";
    }



}
