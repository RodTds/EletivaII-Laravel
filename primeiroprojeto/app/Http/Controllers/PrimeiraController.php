<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{
    public function abrirForm()
    {
        return view('exemplo');
    }
    public function resposta(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $soma = $valor1 + $valor2;
        return "Soma: " . $soma;
    }

    public function abrirForm2()
    {
        return view('exercicio2');
    }
    public function respExerc2(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $sub = $valor1 - $valor2;
        return "Subtração: " . $sub;
    }

    public function abrirForm3(){
        return view('exercicio3');
    }
    public function resp3(Request $request){
         return "Multiplicação: ".$request->valor1 * $request->valor2;
    }
}
