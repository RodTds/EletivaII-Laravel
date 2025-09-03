<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;

// metodo get é estatico, eu nao preciso instanciar um objeto para usar o metodo estatico (orientacao objeto)


Route::resource('clientes',ClienteController::class);
//Litar Clis

Route::get('/exercicio1',[PrimeiraController::class,'abrirForm']);
Route::post('/resposta1',[PrimeiraController::class,'resp1']);

Route::get('/exercicio2',[PrimeiraController::class,'abrirForm2']);
Route::post('resposta2',[PrimeiraController::class,'resp2']);

Route::get('/exercicio3',[PrimeiraController::class,'abrirForm3']);
Route::post('/resposta3',[PrimeiraController::class,'resp3']);

Route::get('/exercicio4',[PrimeiraController::class,'abrirForm4']);
Route::post('/resposta4',[PrimeiraController::class,'resp4']);

Route::get('/exercicio5',[PrimeiraController::class,'abrirForm5']);
Route::post('/resposta5',[PrimeiraController::class,'resp5']);

Route::get('/exercicio6',[PrimeiraController::class,'abrirForm6']);
Route::post('/resposta6',[PrimeiraController::class,'resp6']);

Route::get('/exercicio7',[PrimeiraController::class,'abrirForm7']);
Route::post('/resposta7',[PrimeiraController::class,'resp7']);

Route::get('/exercicio8',[PrimeiraController::class,'abrirForm8']);
Route::post('/resposta8',[PrimeiraController::class,'resp8']);

Route::get('/exercicio9',[PrimeiraController::class,'abrirForm9']);
Route::post('/resposta9',[PrimeiraController::class,'resp9']);

Route::get('/exercicio10',[PrimeiraController::class,'abrirForm10']);
Route::post('/resposta10',[PrimeiraController::class,'resp10']);