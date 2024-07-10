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

}
