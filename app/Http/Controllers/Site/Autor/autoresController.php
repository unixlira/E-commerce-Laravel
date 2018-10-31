<?php

namespace App\Http\Controllers\Site\Autor;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Autor;
use Mail;
use Session;

class autoresController extends Controller
{
    public function index(Request $request)
    {
        $autores = Autor::company()->where('inativo', 0)->orderBy('nome')->paginate(8);
        return view('site.autores.index', compact('autores'));
    }

    public function show($slug)
    {
        $autor = Autor::company()->where('slug', $slug)->firstOrFail();
        return view('site.autores.show', compact('autor'));
    }
}
