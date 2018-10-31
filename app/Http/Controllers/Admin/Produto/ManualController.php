<?php

namespace App\Http\Controllers\Admin\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Manual;
use App\Models\Produto\Categoria;
use Session;

class ManualController extends Controller
{
    public function index(Request $request)
    {
        $manuais = Manual::company()->orderBy('nome');
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();

       
         if(isset($request->busca) && $request->busca!="") {
            $manuais->where('nome', 'like', '%' . addslashes($request->busca) . '%');
        }
        
        if(isset($request->categoria_id) && $request->categoria_id!=""){
            $manuais->where('categoria_id', $request->categoria_id);
        }

                   
        $manuais = $manuais->paginate(20);
        return view('admin.produtos.categorias.manuais.index',  compact('request', 'manuais',  'categorias_select'));
    }


    public function create($id,Request $request)
    {
        $manual = Manual::company()->findOrNew($id); 
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();

        return view('admin.produtos.categorias.manuais.create', compact('request', 'manual', 'categorias_select'));
    }




    public function save($id, Request $request)
    {
         if($id=="0") {
            $manual = new Manual();
        } else {
            $manual = Manual::company()->findOrFail($id);
        }
        $required = array(
            'categoria_id'  => 'integer|required',
            'nome'          => 'string|required',        
        );    
        $this->validate($request, $required);

        $manual = Manual::company()->findOrNew($id);
        $manual->empresa_id = session('site')->id;
        $manual->slug = slug($request->nome);
        $manual->categoria_id = $request->categoria_id;
        $manual->nome = $request->nome;
        $manual->descricao = $request->descricao;     
        $manual->inativo = $request->ativo!="" ? '0' : '1';

             
        
        $manual->save();
        Session::flash('flash_message', 'Salvo com sucesso!');
        return redirect('admin/produtos/categorias/manuais/?categoria_id='. $manual->categoria_id);
    }


    public function delete(Request $request, $id)
    {
        $manual = Manual::company()->findOrFail($id);
        if($manual->instrucoes()->count() > 0) {
            Session::flash('error_message', 'Este manual não pode ser excluído, porque tem instruções de coletas cadastradas.');
			return back()->withInput();
        }
        $manual->delete();
        Session::flash('flash_message', 'Excluido com sucesso!');
        return redirect('admin/produtos/categorias/manuais/?categoria_id='. $manual->categoria_id);
    }  
}
