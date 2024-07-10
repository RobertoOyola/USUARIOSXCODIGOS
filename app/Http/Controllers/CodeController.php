<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CodeController extends Controller
{
    //TODOS CODE GET
    public function codigoGet()
    {
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
}
