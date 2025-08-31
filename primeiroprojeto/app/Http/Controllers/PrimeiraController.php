<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{

    public function abrirForm()
    {
        return view('exercicio1');
    }
    public function resp1(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $soma = $valor1 + $valor2;
        return "Soma: " . $soma;
    }
    //------------------------------------------------------------------------
    public function abrirForm2()
    {
        return view('exercicio2');
    }
    public function resp2(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $sub = $valor1 - $valor2;
        return "Subtração: " . $sub;
    }
    //------------------------------------------------------------------------
    public function abrirForm3()
    {
        return view('exercicio3');
    }
    public function resp3(Request $request)
    {
        return "Multiplicação: " . $request->valor1 * $request->valor2;
    }
    //------------------------------------------------------------------------
    public function abrirForm4()
    {
        return view('exercicio4');
    }
    public function resp4(Request $request)
    {
        return "Divisão: " . $request->valor1 / $request->valor2;
    }
    //------------------------------------------------------------------------
    public function abrirForm5()
    {
        return view('exercicio5');
    }
    public function resp5(Request $request)
    {
        return "Média: " . (($request->valor1 + $request->valor2 + $request->valor3) / 3);
    }
    //---------------------------------------------------------------------------
    public function abrirForm6()
    {
        return view('exercicio6');
    }
    public function resp6(Request $request)
    {
        return "Fahrenheit: " . $fahrenheit = ($request->valor1 * 9 / 5) + 32;
    }
    //----------------------------------------------------------------------------
    public function abrirForm7()
    {
        return view('exercicio7');
    }
    public function resp7(Request $request)
    {
        return "Celsius: " . $celsius = ($request->valor1 - 32) * 5 / 9;
    }
    //-----------------------------------------------------------------------------

    public function abrirForm8()
    {
        return view('exercicio8');
    }
    public function resp8(Request $request)
    {
        return "Área : " . $request->valor1 * $request->valor2;
    }
    //--------------------------------------------------------------------------------
     public function abrirForm9()
    {
        return view('exercicio9');
    }
    public function resp9(Request $request)
    {
        return "Área : " .pi() * pow($request->valor, 2);
    }
    //----------------------------------------------------------------------------------
         public function abrirForm10()
    {
        return view('exercicio10');
    }
    public function resp10(Request $request)
    {
        return "Perímetro : ". 2 * ($request->valor1 + $request->valor2);
    }
}

