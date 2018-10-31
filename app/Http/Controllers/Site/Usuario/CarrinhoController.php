<?php

namespace App\Http\Controllers\Site\Usuario;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class CarrinhoController extends Controller
{
      public function index(){

        return view ('site.usuarios.pedidos.carrinho');
        
    }

}
