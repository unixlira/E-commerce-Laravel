<?php

namespace App\Http\Controllers\Admin\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Categoria;
use Session;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::company()->orderBy('nome');
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();
      
        
        if(isset($request->busca) && $request->busca!="") {
            $categorias->where('nome', 'like', '%' . addslashes($request->busca) . '%');
        }
        
        //if(isset($request->categoria_id) && $request->categoria_id!="") {
        $categorias->where('categoria_id', (isset($request->categoria_id) && $request->categoria_id!="" ? $request->categoria_id : 0) );
        //}
        // dd($categorias->toSql());        
        $categorias = $categorias->paginate(20);
        return view('admin.produtos.categorias.index', compact('request', 'categorias', 'categorias_select'));

        
    }

    public function show($id,Request $request)
    {
        $categoria = Categoria::company()->findOrNew($id);   
        $categorias_select = Categoria::company()->where('categoria_id', 0)->orderBy('nome')->get();
        
         
        return view('admin.produtos.categorias.create', compact('categoria','request', 'categorias_select'));
    }

    public function save($id, Request $request)
    {
        $categoria = Categoria::company()->findOrNew($id);
        $categoria->empresa_id = session('site')->id;
        $categoria->slug = slug($request->nome);
        $categoria->categoria_id = $request->categoria_id;
        $categoria->nome = $request->nome;
        $categoria->subtitulo = $request->subtitulo;        
        $categoria->texto_esquerda = $request->textoesquerda;
        $categoria->texto_direita = $request->textodireita;
        $categoria->inativo = $request->ativo!="" ? '0' : '1';

          if ($request->file('imagemtopo')!=null) {
            $path = public_path() . sprintf('/site/%s/images/categorias/topos/', config('app.cliente'));
            $img = strtolower(str_replace(" ", "-", $request->file('imagemtopo')->getClientOriginalName()));
            $request->file('imagemtopo')->move($path, $img);
            $categoria->imagem_destaque = 'images/categorias/topos/' . $img;
        }

        if ($request->file('imagemdestaque')!=null) {
            $path = public_path() . sprintf('/site/%s/images/categorias/destaques/', config('app.cliente'));
            $img = strtolower(str_replace(" ", "-", $request->file('imagemdestaque')->getClientOriginalName()));
            $request->file('imagemdestaque')->move($path, $img);
            $categoria->imagem = 'images/categorias/destaques/' . $img;
        }

         if ($request->file('arquivo')!=null) {
            $path = public_path() . sprintf('/site/%s/images/categorias/pdfs/', config('app.cliente'));
            $img = strtolower(str_replace(" ", "-", $request->file('arquivo')->getClientOriginalName()));
            $request->file('arquivo')->move($path, $img);
            $categoria->arquivo = 'images/categorias/pdfs/' . $img;
        }
         
        
        $categoria->save();
        Session::flash('flash_message', 'Salvo com sucesso!');
        return redirect('admin/produtos/categorias');
    }

    public function delete(Request $request, $id)
    {
        $categoria = Categoria::company()->findOrFail($id);
        if($categoria->manuais()->count() > 0) {
            Session::flash('error_message', 'Esta categoria não pode ser excluída, porque tem manuais de coletas ou arquivos cadastrados.');
			return back()->withInput();
        }
        $categoria->delete();
        Session::flash('flash_message', 'Excluido com sucesso!');
        return redirect('admin/produtos/categorias');
    }
}
