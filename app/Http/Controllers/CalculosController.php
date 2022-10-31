<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function fibonacci(Request $request){
        $request->validate([
            'n' => 'required|numeric|min:1|max:30',
        ]);
        $n = intval($request->n);
        $i = 3;
        $num1 = 0;
        $num2 = 1;
        
        if ($n == 1)
        $fibo = "0";
        else if($n == 2)
            $fibo = "1";
            else 
                $fibo = "0, 1";
                while($i<=$n){
                    $num3 = $num1 + $num2;
                    $num1 = $num2;
                    $num2 = $num3;
                    $i = $i + 1; 
                    $fibo = $fibo. ", ". $num3;
                } 
        return view('fibonacci', compact('n', 'fibo'));
    }

    function NumeroPalabras(Request $request){
        $request->validate([
            'cadena' => 'required|string',
        ]);
        $cadena = strval($request->cadena);
        $cont = str_word_count($cadena);
        return view('NumeroPalabras',compact('cadena', 'cont'));
    }

    function NumeroVocales(Request $request){
        $request->validate([
            'cadena' => 'required|string',
        ]);
        $vocales = 0;
        $cadena = strval($request->cadena);
        $min = strtolower($cadena);
        //$espacio = str_replace(' ','',$min);
        $longitud = strlen($min);
        for ($i = 0; $i < $longitud; $i++) { 
            switch($min[$i]){
                case 'a':
                case 'e':
                case 'i':
                case 'o':
                case 'u': $vocales++;break;
                }
            }
        return view('NumeroVocales',compact('cadena','vocales'));
    }
    
}