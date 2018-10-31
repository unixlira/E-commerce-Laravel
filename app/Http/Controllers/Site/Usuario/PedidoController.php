<?php

namespace App\Http\Controllers\Site\Usuario;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Pedido;
use Auth;

class PedidoController extends Controller
{
      public function index(){        
        
        $pedidos =  Pedido::company()->where('usuario_id', Auth::user()->id)->paginate(10);
        return view ('site.usuarios.pedidos.index', compact( 'pedidos'));

    }

    public function show($numero){
        
        $pedido =  Pedido::company()->where('usuario_id', Auth::user()->id)->where('numero',$numero)->firstOrFail();        
        return view('site.usuarios.pedidos.detalhe', compact( 'pedido'));
    }

}
