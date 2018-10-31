<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sobre;
use Session;

class SobreController extends Controller
{
    public function index()
    {
        $sobre = Sobre::firstOrNew([ 'empresa_id' => session('site')['id'] ]);
        return view('admin.sobre', compact('sobre'));
    }

    public function store(Request $request)
    {   
        $sobre = Sobre::firstOrNew([ 'empresa_id' => session('site')['id'] ]);
        // if ($sobre->id==0) {
        //     $required['imagem'] = 'required';
        // }
        $required = array(
            'nome' => 'string',
            'link' => 'url',
            'imagem' => $sobre->id==0 ? 'image|required' : 'image'
        );
        $this->validate($request, $required);

        $sobre->texto_esquerda = $request->texto_esquerda;
        $sobre->texto_direita = $request->texto_direita;
        $sobre->missao = $request->missao;
        $sobre->visao = $request->visao;
        $sobre->valores = $request->valores;

        if ($request->file('imagem')!=null) {
            $path = public_path() . sprintf('/site/%s/images/about', config('app.cliente'));
            $img = strtolower(str_replace(" ", "-", $request->file('imagem')->getClientOriginalName()));
            $request->file('imagem')->move($path, $img);
            $sobre->imagem = '/images/about/' . $img;
        }
        $sobre->save();

        Session::flash('flash_message', 'Salvo com sucesso!');

        return redirect('admin/sobre-nos');
    }
}
