<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request) {
        $path = $request->path();
        echo 'path: '.$path;
        echo '<br>';
       
        $pattern = $request->is('foo/*');
        echo 'is: '.$pattern;
        echo '<br>';

        $methodname = $request->isMethod('POST');
        echo 'isMethod: '.$methodname;
        echo '<br>';

        $methodtype = $request->method();
        echo 'method: '.$methodtype;
        echo '<br>';

        $url = $request->url();
        echo 'url: '.$url;
        echo '<br>';

        $url1 = $request->fullUrl();
        echo 'fullurl: '.$url1;
        echo '<br>';

        $routeis = $request->routeIs('user.*');
        echo 'routeIs: '.$routeis;
        echo '<br>';
        
        //check the following for the following code--> http://localhost:8000/viewer?name=nav&class=btech
        $name = $request->query('name','Michael');//Michael will show up if no request is made
        echo 'Viewer Name: '.$name;
        echo '<br>';
        
        $class = $request->query('class','X');//X will show up if no request is made
        echo 'Viewer Class: '.$class;
     }
}