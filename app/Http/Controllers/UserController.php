<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // TODOS USUARIOS GET
    public function usuarioGet(){
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
    public function usuarioInt(Request $request){
        $nombre = $request->input('NOMBRES');
        $apellido = $request->input('APELLIDOS');
        $contrasena = $request->input('CONTRASENA');
        $fechanacimiento = $request->input('FECHA_NACIMIENTO');
        $usuariocreacion = $request->input('USUARIO_CREACION');

        DB::statement("CALL USUARIO_INTO(?, ?, ?, ?, ?)", [
            $nombre,
            $apellido,
            $contrasena,
            $fechanacimiento,
            $usuariocreacion
        ]);
        return "Usuario insertado correctamente.";
    }

    // UPDATE USUARIO
    public function usuarioUpd(Request $request){
        $id_usuario = $request->input('ID_USUARIO');
        $nombres = $request->input('NOMBRES');
        $apellidos = $request->input('APELLIDOS');
        $contrasena = $request->input('CONTRASENA');
        $fecha_nacimiento = $request->input('FECHA_NACIMIENTO');
        $usuario_modificacion = $request->input('USUARIO_MODIFICACION');
        
        $fecha_nacimiento = date('Y-m-d', strtotime($fecha_nacimiento));
        
        DB::statement("CALL USUARIO_UPD(?, ?, ?, ?, ?, ?)", [
            $id_usuario,
            $nombres,
            $apellidos,
            $contrasena,
            $fecha_nacimiento,
            $usuario_modificacion 
        ]);
        return "Usuario actualizado correctamente.";
    }

    // DELETE USUARIO
    public function usuarioDel(Request $request, $id){
        $usuario_modificacion = $request->input('USUARIO_MODIFICACION');

        DB::statement("CALL USUARIO_DEL(?, ?)", [
            $id,
            $usuario_modificacion
        ]);
        return "Usuario eliminado correctamente.";
    }

    // LOGIN 
    public function login(Request $request)
    {
        $nombre = $request->input('NOMBRES');
        $contrasena = $request->input('CONTRASENA');
    
        try {
            $results = DB::select("CALL LOGIN(?, ?)", [
                $nombre,
                $contrasena
            ]);
    
            if (isset($results[0]->Error)) {
                return response()->json(['error' => $results[0]->Error], 401);
            } else {
                return response()->json([
                    'nombre' => $results[0]->Nombre,
                    'descripcion' => $results[0]->Descripcion
                ]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error occurred during login.'], 500);
        }
    }
    
    
}
