<?php

namespace App\Http\Controllers\Admin\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Produto;
use App\Models\Produto\Categoria;
use Session;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::company()->orderBy('nome');
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();
        
        if(isset($request->busca) && $request->busca!="") {
            $produtos->where('nome', 'like', '%' . addslashes($request->busca) . '%');
        }

         if(isset($request->categoria_id) && $request->categoria_id!=""){
            $produtos->where('categoria_id', $request->categoria_id);
        } 
                
        $produtos = $produtos->with('categoria')->paginate(20);
        return view('admin.produtos.index', compact('request', 'produtos','categorias_select'));
    }

    public function create($id,Request $request)
    {
        $produto = Produto::company()->findOrNew($id);
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();
        return view('admin.produtos.create', compact('produto','request', 'categorias_select'));
    }

    public function save($id, Request $request)
    {

         if($id=="0") {
            $produto = new Produto();
        } else {
            $produto = Produto::company()->findOrFail($id);
        }
        $required = array(
            'categoria_id'  => 'integer|required',
            'nome'          => 'string|required',          
            'codigo'        => 'string|required',
            'preco'         => 'string|required',
            'prazo'         => 'string|required'
        );    
        $this->validate($request, $required);
        



        $produto = Produto::company()->findOrNew($id);
        $produto->empresa_id = session('site')->id;
        $produto->categoria_id = $request->categoria_id;
        $produto->slug = slug($request->nome);
        $produto->nome = $request->nome;
        $produto->subtitulo = $request->subtitulo;
        $produto->codigo = $request->codigo;
        $produto->preco = valor($request->preco, 1);
        $produto->descricao = $request->descricao;     
        $produto->prazo = $request->prazo;     
        $produto->tipos_de_amostra = $request->amostra;     
        $produto->inativo = $request->ativo!="" ? '0' : '1';        
        

        $produto->save();
        Session::flash('flash_message', 'Salvo com sucesso!');
        return redirect('admin/produtos/?categoria_id=' . $produto->categoria_id);
    }

    public function delete(Request $request, $id)
    {
        $produto = Produto::company()->findOrFail($id);
        $produto->delete();
        Session::flash('flash_message', 'Excluido com sucesso!');
        return redirect('admin/produtos/?categoria_id=' . $produto->categoria_id);
    }
}
