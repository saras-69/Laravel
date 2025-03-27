<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function displaylist($name=null){
        $students = ['Ayush', 'Deepak', 'Ruchita', 'Anushka', 'Manoj', 'Rashmi'];
        $msg = null;
        if($name!=null){
        $found = False;
        foreach($students as $student){
            if($student == $name){
                $found = True;
                break;
            }
        }
        if($found){
            $msg = "You have chosen $name";
        }
        else{
            $msg = "$name is not available";
        }
    }
        return view('students',['students'=>$students, 'msg'=>$msg]);
    
}
}
