<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController1 extends Controller
{
    //
    public function displayform(){
        return view('request');
    }
    public function index(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        echo "The namme $name<br> The email is $email";
    }
}
