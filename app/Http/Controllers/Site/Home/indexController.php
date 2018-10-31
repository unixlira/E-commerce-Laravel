<?php

namespace App\Http\Controllers\Site\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Slide;
use App\Models\Parceiro;
use App\Models\Produto\Produto;
use App\Models\Produto\Categoria;
use App\Models\Home\Newsletter;
use App\Models\Faqs;
use App\Models\Manual;


class indexController extends Controller
{
    public function index()
    {
        $slides = Slide::company()->where('inativo', 0)->orderBy('ID')->get();
        $i = 0;
        //$destaques = Produto::company()->where('inativo', 0)->where('destaque', 1)->orderBy('nome')->get();
        $parceiros = Parceiro::company()->ativo()->orderBy('nome')->get();
        //return view('site.index', compact('slides', 'i', 'destaques', 'parceiros'));

        //Foi criado para exibir na home 
        $categorias = Categoria::company()->ativo()->where('categoria_id', 0)->orderBy('nome')->get();
        
        $faqs = Faqs::company()->ativo()->orderBy('pergunta')->get();

        $parceiros = Parceiro::company()->ativo()->orderBy('nome')->get();
        //return view('site.index', compact('categoria', 'i', 'destaques', 'parceiros'));

        
        return view('site.index', compact('slides', 'i', 'categorias', 'parceiros', 'faqs', 'manuais_coletas'));
    }

    //  public function save(Request $request)
    // {
    //     $newsletter->email = $request->email;
       
    //     Session::flash('flash_message', 'Salvo com sucesso!');
    //     return redirect('/');
    // }

    


    
}
