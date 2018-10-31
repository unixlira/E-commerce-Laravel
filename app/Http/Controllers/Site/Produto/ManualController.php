<?php

namespace App\Http\Controllers\Site\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Categoria;
use App\Models\Produto\Manual;
use Session;


class ManualController extends Controller
{
    public function index($categoria_slug)
    {
        $categoria = Categoria::company()->where('slug', $categoria_slug)->firstOrFail();
        $manuais = $categoria->manuais()->ativo()->orderBy('nome')->get();
        return view ('site.produtos.manuais', compact ('categoria', 'manuais'));
    }   
 
}