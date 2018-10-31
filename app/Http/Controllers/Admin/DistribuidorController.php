<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Distribuidor;
use Mail;
use Session;

class DistribuidorController extends Controller
{
    public function index(Request $request)
    {
        $distribuidores = Distribuidor::company()->orderBy('titulo')->paginate(8);
        return view('admin.distribuidores.index', compact('request', 'distribuidores','manuais_coletas'));
    }

    public function show($id)
    {
        $distribuidor = Distribuidor::company()->find($id);
        return view('admin.distribuidores.create', compact('distribuidor'));
    }

    public function store(Request $request, $id)
    {   
        if($id=="0") {
            $distribuidor = new Distribuidor();
        } else {
            $distribuidor = Distribuidor::company()->findOrFail($id);
        }
        $required = array(
            'nome' => 'string',
            'titulo' => 'string',
            'uf' => 'string'
        );
        $this->validate($request, $required);

        $distribuidor->empresa_id = session('site')->id;
        $distribuidor->titulo = $request->titulo;
        $distribuidor->nome = $request->nome;
        $distribuidor->rua = $request->rua;
        $distribuidor->numero = $request->numero;
        $distribuidor->complemento = $request->complemento;
        $distribuidor->bairro = $request->bairro;
        $distribuidor->cidade = $request->cidade;
        $distribuidor->uf = $request->uf;
        $distribuidor->cep = $request->cep;
        $distribuidor->telefone = $request->telefone;
        $distribuidor->fax = $request->fax;
        $distribuidor->email = $request->email;
        $distribuidor->inativo  = (isset($request->ativo) && $request->ativo==1 ? 0 : 1);

        $distribuidor->save();

        Session::flash('flash_message', 'Salvo com sucesso!');

        return redirect('admin/distribuidores');
    }
}
