<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('Frontend.calculator');
    }
public function calculate(Request $request)
{
    $firstInput = $request->input('first_input');
    $secondInput = $request->input('second_input');
    $operation = $request->input('operation');
    $result = $firstInput.$operation.$secondInput;
    $calc = eval("return $result;");
    // echo $calc;

//     switch ($operation) {
//         case 'add':
//             // $result = ($firstInput, $secondInput);
//             $result = $firstInput + $secondInput;
//             break;
//         case 'sub':
//             $result = $firstInput - $secondInput;
//             break;
//         case 'div':
//             $result =  $firstInput / $secondInput ;
//             break;
//         case 'mul':
//             $result = $firstInput * $secondInput;
//             break;
//         default:
//             $result = 'Invalid operation';
//     }

    return view('Frontend.calculator', compact('calc'));
// }
}
}


