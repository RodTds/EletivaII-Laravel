<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;

// metodo get é estatico, eu nao preciso instanciar um objeto para usar o metodo estatico (orientacao objeto)



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

Route::get('/exercicio11',[PrimeiraController::class,'abrirForm11']);
Route::post('/resposta11',[PrimeiraController::class,'resp11']);

Route::get('/exercicio12',[PrimeiraController::class,'abrirForm12']);
Route::post('/resposta12',[PrimeiraController::class,'resp12']);

Route::get('/exercicio13',[PrimeiraController::class,'abrirForm13']);
Route::post('/resposta13',[PrimeiraController::class,'resp13']);

Route::get('/exercicio14',[PrimeiraController::class,'abrirForm14']);
Route::post('/resposta14',[PrimeiraController::class,'resp14']);

Route::get('/exercicio15',[PrimeiraController::class,'abrirForm15']);
Route::post('/resposta15',[PrimeiraController::class,'resp15']);

Route::get('/exercicio16',[PrimeiraController::class,'abrirForm16']);
Route::post('/resposta16',[PrimeiraController::class,'resp16']);

Route::get('/exercicio17',[PrimeiraController::class,'abrirForm17']);
Route::post('/resposta17',[PrimeiraController::class,'resp17']);

Route::get('/exercicio18',[PrimeiraController::class,'abrirForm18']);
Route::post('/resposta18',[PrimeiraController::class,'resp18']);

Route::get('/exercicio19',[PrimeiraController::class,'abrirForm19']);
Route::post('/resposta19',[PrimeiraController::class,'resp19']);

Route::get('/exercicio20',[PrimeiraController::class,'abrirForm20']);
Route::post('/resposta20',[PrimeiraController::class,'resp20']);