<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
{
    //
    public function dispalyitem($itemname)
    {
        return "The requested item is: " . $itemname;
    }
}
