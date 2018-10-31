<?php

namespace App\Http\Controllers\Site\Produto;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Categoria;

class FormularioController extends Controller
{
     public function index($categoria_slug)
    {
        $categoria = Categoria::company()->where('slug', $categoria_slug)->firstOrFail();
        $arquivos  = $categoria->arquivos()->ativo()->orderBy('nome')->get();
       
       return view ('site.produtos.formularios', compact('categoria','arquivos'));
       
    }
}
