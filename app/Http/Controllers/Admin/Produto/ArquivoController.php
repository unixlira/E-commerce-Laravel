<?php

namespace App\Http\Controllers\Admin\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Categoria;
use App\Models\Produto\Arquivo;
use Session;

class ArquivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $arquivos = Arquivo::company()->orderBy('nome');      
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();

         if(isset($request->busca) && $request->busca!="") {
            $arquivos->where('nome', 'like', '%' . addslashes($request->busca) . '%');//busca de qualquer parte do nome
        }    
        if(isset($request->categoria_id) && $request->categoria_id!=""){
            $arquivos->where('categoria_id', $request->categoria_id);//busca de categoria
        }
               
        $arquivos = $arquivos->paginate(20);
        return view('admin.produtos.categorias.arquivos.index',  compact('request', 'arquivos',  'categorias_select'));
    }

    public function create($id,Request $request)
    {
        $arquivo = Arquivo::company()->findOrNew($id); 
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();

        return view('admin.produtos.categorias.arquivos.create',compact('request', 'arquivo', 'categorias_select'));
    }

    public function save($id, Request $request)
    {
        if($id=="0") {
            $arquivo = new Arquivo();
        } else {
            $arquivo = Arquivo::company()->findOrFail($id);
        }
          $this->validate($request, [
            'categoria_id' => 'integer',
            'nome'         => 'string',
            'tipo'         => 'string',                   

        ]);
        $arquivo = Arquivo::company()->findOrNew($id);
        $arquivo->empresa_id = session('site')->id;
        $arquivo->slug = slug($request->nome);
        $arquivo->categoria_id = $request->categoria_id;
        $arquivo->nome = $request->nome;
        $arquivo->tipo = $request->tipo;     
        $arquivo->inativo = $request->ativo!="" ? '0' : '1';

        if ($request->file('arquivo')!=null) {
            $path = public_path() . sprintf('/site/%s/images/categorias/formularios/', config('app.cliente'));
            $img = strtolower(str_replace(" ", "-", $request->file('arquivo')->getClientOriginalName()));
            $request->file('arquivo')->move($path, $img);
            $arquivo->arquivo = 'images/categorias/formularios/' . $img;
        }
         
        
        $arquivo->save();
        Session::flash('flash_message', 'Salvo com sucesso!');
        return redirect('admin/produtos/categorias/arquivos/?categoria_id='. $arquivo->categoria_id);
    }

    public function delete(Request $request, $id)
    {
        $arquivo = Arquivo::company()->findOrFail($id);
        $arquivo->delete();
        Session::flash('flash_message', 'Excluido com sucesso!');
        return redirect('admin/produtos/categorias');
    }
    
}
