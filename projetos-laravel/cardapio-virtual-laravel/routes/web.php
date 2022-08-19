<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('exemplo');
});

Route::get('/novarota', 'App\Http\Controllers\olacontroller@helloword');
Route::get('/cadastroempresa','App\Http\Controllers\olacontroller@cadastroempresa');
Route::get('/cardapio','App\Http\Controllers\olacontroller@cardapio');
Route::get('/DadosEmpresa','App\Http\Controllers\olacontroller@DadosEmpresa');
Route::get('/funcionarios','App\Http\Controllers\olacontroller@funcionarios');
Route::get('/Login','App\Http\Controllers\olacontroller@Login');
Route::get('/meuarquivo','App\Http\Controllers\olacontroller@meuarquivo');
Route::get('/Navbar','App\Http\Controllers\olacontroller@Navbar');
Route::get('/Produtos','App\Http\Controllers\olacontroller@Produtos');
Route::get('/VerPedidos','App\Http\Controllers\olacontroller@VerPedidos');
