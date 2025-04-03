<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function index(Request $request){
        $path=$request->path();
        echo "$path<br>";

        $pattern=$request->is("admin/*");
        echo "$pattern<br>";

    }
}
