<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private function myprivate(){
        return 1;
    }
    function myfunction(Request $request, $var1=""){
        $data['myinput'] = $request->input('myinput');
        $data['myvalue'] = $var1;
        return view('myview', $data);
    }

}

