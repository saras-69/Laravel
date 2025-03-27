<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return "This is my first controller";
    }
    public function display(){
        $name = "Manoj";
        $marks = 90;
        return "The name is $name and the marks are $marks";
    }
    public function display1(){
        return view('details', ['name'=>"Manoj"]);
    }
    public function display2($name){
        return view('details1', ['name'=>$name]);
    }

}
