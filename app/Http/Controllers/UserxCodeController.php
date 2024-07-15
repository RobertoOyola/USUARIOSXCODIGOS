<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserxCodeController extends Controller
{
    //TODOS USUXCODE GET
    public function userxcodeGet()
    {
        $usuxcodes = DB::select('CALL USUXCOD_GET');

        echo "<pre>";
        print_r($usuxcodes);
    }

    //UNICO USUXCODE GET
    public function userxcodeGetID($usuxcode_id){
        
        $data = DB::select("CALL USUXCOD_GETID(".$usuxcode_id.")");

        echo "<pre>";
        print_r($data);
    }

    // INSERT USUXCODE
    public function userxcodeInt(Request $request){
        $id_cod = $request->input('ID_CODIGO');
        $id_usu = $request->input('ID_USUARIO');
        $descripcion = $request->input('DESCRIPCION');
        $usuariocreacion = $request->input('USUARIO_CREACION');

        DB::statement("CALL USUXCOD_INTO(?, ?, ?, ?)", [
            $id_cod,
            $id_usu,
            $descripcion,
            $usuariocreacion
        ]);
        return "Usuario x Codigo insertado correctamente.";
    }
    
    // UPDATE USUXCODE
    public function userxcodeUpd(Request $request){
        $id_usuxcod = $request->input('ID_USUXCOD');
        $id_cod = $request->input('ID_CODIGO');
        $id_usu = $request->input('ID_USUARIO');
        $descripcion = $request->input('DESCRIPCION');
        $usuario_modificacion = $request->input('USUARIO_MODIFICACION');
        
        DB::statement("CALL USUXCOD_UPD(?, ?, ?, ?, ?)", [
            $id_usuxcod,
            $id_cod,
            $id_usu,
            $descripcion,
            $usuario_modificacion 
        ]);
        return "Usuario x Codigo actualizado correctamente.";
    }

    // DELETE USUXCODE
    public function userxcodeDel(Request $request, $id){
        $usuario_modificacion = $request->input('USUARIO_MODIFICACION');

        DB::statement("CALL USUXCOD_DEL(?, ?)", [
            $id,
            $usuario_modificacion
        ]);
        return "Usuario x Codigo eliminado correctamente.";
    }

}
