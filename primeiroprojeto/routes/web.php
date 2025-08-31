<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;

// metodo get é estatico, eu nao preciso instanciar um objeto para usar o metodo estatico (orientacao objeto)

Route::get('/exemplo',[PrimeiraController::class,'abrirForm']);
Route::post('/exemplo_resposta',[PrimeiraController::class,'resposta']);

Route::get('/exercicio2',[PrimeiraController::class,'abrirForm2']);
Route::post('exercicio2_resposta',[PrimeiraController::class,'respExerc2']);

Route::get('/exercicio3',[PrimeiraController::class,'abrirForm3']);
Route::post('resposta3',[PrimeiraController::class,'resp3']);