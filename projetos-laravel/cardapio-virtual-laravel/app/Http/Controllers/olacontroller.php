<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class olacontroller extends Controller
{
    public function helloword(){
      return view('filipe');
    }
    public function cadastroempresa(){
      return view('cadastroempresa');
    }
    public function cardapio(){
      return view('cardapio');
    }
    public function dadosempresa(){
      return view('DadosEmpresa');
    }
    public function funcionarios(){
      return view('funcionarios');
    }
    public function Login(){
      return view('Login');
    }
    public function meuarquivocss(){
      return view('meuarquivo');
    }
    public function Navbar(){
      return view('Navbar');
    }
    public function Produtos(){
      return view('Produtos');
    }
    public function VerPedidos(){
      return view('VerPedidos');
    }


}
