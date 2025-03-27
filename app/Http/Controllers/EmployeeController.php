<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function displayemployeelist(){
        $employees = [
            ['name'=>'Ayush', 'salary'=>30000, 'address'=>'Delhi'],
            ['name'=>'Kirtu', 'salary'=>25000, 'address'=>'Mumbai'],
            ['name'=>'Manish', 'salary'=>40000, 'address'=>'Chandigarh'],
            ['name'=>'Rita', 'salary'=>28000, 'address'=>'Noida'],
        ];
        return view('employees', ['employees'=>$employees]);
    }
}
