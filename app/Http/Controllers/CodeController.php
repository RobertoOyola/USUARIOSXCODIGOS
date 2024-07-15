<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CodeController extends Controller
{
    //TODOS CODE GET
    public function codigoGet(){
        $codes = DB::select('CALL CODIGO_GET()');

        echo "<pre>";
        print_r($codes);
    }

    //UNICO CODE GET
    public function codigoGetID($code_id){
        $data = DB::select("CALL USUARIO_GETID(".$code_id.")");

        echo "<pre>";
        print_r($data);
    }

    // INSERT CODE
    public function codigoInt(Request $request){
        $descripcion = $request->input('DESCRIPCION');
        $usuario_creacion = $request->input('USUARIO_CREACION');

        DB::statement("CALL CODIGO_INTO(?, ?)", [
            $descripcion,
            $usuario_creacion
        ]);
        return "Codigo insertado correctamente.";
    }

    // UPDATE CODE
    public function codigoUpd(Request $request){
        $id_codigo = $request->input('ID_CODIGO');
        $descripcion = $request->input('DESCRIPCION');
        $usuario_modificacion = $request->input('USUARIO_MODIFICACION');

        DB::statement("CALL CODIGO_UPD(?, ?, ?)", [
            $id_codigo,
            $descripcion,
            $usuario_modificacion
        ]);
        return "Codigo actualizado correctamente.";
    }

    // DELETE USUARIO
    public function codigoDel(Request $request, $id){
        $usuario_modificacion = $request->input('USUARIO_MODIFICACION');

        DB::statement("CALL CODIGO_DEL(?, ?)", [
            $id,
            $usuario_modificacion
        ]);
        return "Codigo eliminado correctamente.";
    }

}
