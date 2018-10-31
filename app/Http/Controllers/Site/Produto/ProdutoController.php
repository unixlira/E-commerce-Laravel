<?php

namespace App\Http\Controllers\Site\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Slide;
use App\Models\Produto\Produto;
use App\Models\Produto\Categoria;


class ProdutoController extends Controller
{
    public function index(Request $request, $slug)
    {
       
        $categoria = Categoria::company()->where('slug', $slug)->firstOrFail();
        return view('site.produtos.index', compact('categoria'));
    }

    public function show($categoria_slug, $produto_slug, Request $request)
    {
        $categoria = Categoria::company()->where('slug', ( $request->sub!="" ? $request->sub : $categoria_slug ))->firstOrFail(); 
        $produto   = Produto::company()->where('slug', $produto_slug)->where('categoria_id', $categoria->id)->firstOrFail();
        $slides    = explode(',', $produto->carroussel);
        return view('site.produtos.show', compact('produto', 'slides'));
    }
}