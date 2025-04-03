<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        $result = 0;
        
        switch($operation) {
            case 'add':
                $result = $num1 + $num2;
                $operationName = 'Addition';
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $operationName = 'Subtraction';
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $operationName = 'Multiplication';
                break;
            case 'divide':
                if($num2 != 0) {
                    $result = $num1 / $num2;
                    $operationName = 'Division';
                } else {
                    return back()->with('error', 'Cannot divide by zero!');
                }
                break;
            default:
                return back()->with('error', 'Invalid operation selected!');
        }
        
        return back()->with([
            'result' => $result,
            'num1' => $num1,
            'num2' => $num2,
            'operation' => $operation,
            'operationName' => $operationName
        ]);
    }
}