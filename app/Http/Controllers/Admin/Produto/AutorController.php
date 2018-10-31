<?php

namespace App\Http\Controllers\Admin\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Autor;
use Mail;
use Session;

class AutorController extends Controller
{
    public function index(Request $request)
    {
        $autores = Autor::company()->orderBy('nome')->paginate(8);
        return view('admin.produtos.autores.index', compact('request', 'autores'));
    }

    public function show($id)
    {
        $autor = Autor::company()->find($id);
        return view('admin.produtos.autores.create', compact('autor'));
    }
}
