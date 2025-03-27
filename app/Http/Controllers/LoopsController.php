<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopsController extends Controller
{
    public function index(){
        $records=['Record1', 'Record2', 'Record3', 'Record4', 'Record5', 'Record6'];
        return view('loops', ['records'=>$records]);
    }
}
