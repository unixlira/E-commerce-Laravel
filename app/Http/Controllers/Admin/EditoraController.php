<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Parceiro;
use Mail;
use Session;

class EditoraController extends Controller
{
    public function index(Request $request)
    {
        $editoras = Parceiro::company()->orderBy('nome')->paginate(8);
        return view('admin.editoras.index', compact('request', 'editoras'));
    }

    public function show($id)
    {
        $editora = Parceiro::company()->find($id);
        return view('admin.editoras.create', compact('editora'));
    }

    public function store(Request $request, $id)
    {   
        if($id=="0") {
            $editora = new Parceiro();
        } else {
            $editora = Parceiro::company()->findOrFail($id);
        }
        $required = array(
            'nome' => 'string',
            'link' => 'url',
            'imagem' => $editora->id==0 ? 'image|required' : 'image'
        );
        $this->validate($request, $required);

        $editora->empresa_id = session('site')->id;
        $editora->nome = $request->nome;
        $editora->link = $request->link;

        if ($request->file('imagem')!=null) {
            $path = public_path() . sprintf('/site/%s/images/clients', config('app.cliente'));
            $img = strtolower(str_replace(" ", "-", $request->file('imagem')->getClientOriginalName()));
            $request->file('imagem')->move($path, $img);
            $editora->imagem = '/images/clients/' . $img;
        }
        $editora->save();

        Session::flash('flash_message', 'Salvo com sucesso!');

        return redirect('admin/editoras');
    }
}
