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
        return "Área : " . pi() * pow($request->valor, 2);
    }
    //----------------------------------------------------------------------------------
    public function abrirForm10()
    {
        return view('exercicio10');
    }
    public function resp10(Request $request)
    {
        return "Perímetro : " . 2 * ($request->valor1 + $request->valor2);
    }
    //----------------------------------------------------------------------------------
    public function abrirForm11()
    {
        return view('exercicio11');
    }
    public function resp11(Request $request)
    {
        return "Perimetro do Circulo: " . 2 * pi() * $request->valor1;
    }
    //----------------------------------------------------------------------------------
    public function abrirForm12()
    {
        return view('exercicio12');
    }
    public function resp12(Request $request)
    {
        return "Resultado: " . $request->valor1 ** $request->valor2;
    }
    //----------------------------------------------------------------------------------
    public function abrirForm13()
    {
        return view('exercicio13');
    }
    public function resp13(Request $request)
    {
        return "Centimetros: " . $request->valor1 * 100;
    }
    //----------------------------------------------------------------------------------
    public function abrirForm14()
    {
        return view('exercicio14');
    }
    public function resp14(Request $request)
    {
        return "Milhas: " . $request->valor1 *  0.621371;
    }

    //----------------------------------------------------------------------------------
    public function abrirForm15()
    {
        return view('exercicio15');
    }
    public function resp15(Request $request)
    {
        return "IMC: " . $request->valor1 / ($request->valor2 ** 2);
    }
    //----------------------------------------------------------------------------------
    public function abrirForm16()
    {
        return view('exercicio16');
    }
    public function resp16(Request $request)
    {
        return "Preço com desconto: " . $request->valor1 - ($request->valor1 * $request->valor2 / 100);
    }
    //----------------------------------------------------------------------------------
    public function abrirForm17()
    {
        return view('exercicio17');
    }
    public function resp17(Request $request)
    {
        try {
            return "Total com Juros simples " . $request->valor1 * ($request->valor2 / 100) * $request->valor3;
        } catch (\Exception $e) {
            redirect()->route('resposta17');
            "Erro ao calcular" . $e->getMessage();
        }
    }
    //----------------------------------------------------------------------------------
    public function abrirForm18()
    {
        return view('exercicio18');
    }
    public function resp18(Request $request)
    {
        return "Total com Juros compsto: " . ($request->valor1 * (1 + $request->valor2) ^ $request->valor3);
    }
    //----------------------------------------------------------------------------------
    public function abrirForm19()
    {
        return view('exercicio19');
    }
    public function resp19(Request $request)
    {
        $horas = $request->dias * 24;
        $minutos = $request->dias * 24 * 60;
        $segundos = $request->dias * 24 * 60 * 60;

        $resultado = "$request->dias dia equivalem a: 
                  $horas horas, 
                  $minutos minutos, 
                  $segundos segundos.";
        return $resultado;
    }
    //----------------------------------------------------------------------------------
    public function abrirForm20()
    {
        return view('exercicio20');
    }
    public function resp20(Request $request) {
        return "Velocidade média: ". $request->valor1 / $request->valor2;
    }
}
