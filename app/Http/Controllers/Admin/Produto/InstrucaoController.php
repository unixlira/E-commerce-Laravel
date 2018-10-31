<?php

namespace  App\Http\Controllers\Admin\Produto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto\Manual;
use App\Models\Produto\Categoria;
use App\Models\Produto\Instrucao;
use Session;

class InstrucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $instrucoes = Instrucao::company()->orderBy('nome');        
        $manuais_select = Manual::company()->ativo()->orderBy('nome')->get();

        //busca de qualquer parte do nome
         if(isset($request->busca) && $request->busca!="") {
            $instrucoes->where('nome', 'like', '%' . addslashes($request->busca) . '%');
        }
        //busca de manual
        if(isset($request->manual_coleta_id) && $request->manual_coleta_id!=""){
            $instrucoes->where('manual_coleta_id', $request->manual_coleta_id);
        }       

        $instrucoes = $instrucoes->paginate(20);
        return view('admin.produtos.categorias.manuais.instrucoes.index', compact('request', 'instrucoes', 'manuais_select'));
    }

    public function create($id, Request $request)
    {
        $instrucao = Instrucao::company()->findOrNew($id); 
        $manuais_select = Manual::company()->ativo()->orderBy('nome')->get();

        $manuais = Manual::company()->orderBy('nome');
        return view('admin.produtos.categorias.manuais.instrucoes.create', compact('request','instrucao','manuais','manuais_select'));
    }
 

    public function save($id, Request $request)
    {
        if($id=="0") {
            $instrucao = new Instrucao();
        } else {
            $instrucao = Instrucao::company()->findOrFail($id);
        }
        $required = array(
            'manual_coleta_id'  => 'integer|required',
            'nome'              => 'string|required',          
            'subtitulo'         => 'string|required',
            'conteudo'          => 'string',
            'link'              => 'url',
            'imagem'            => $instrucao->id==0 ? 'image|required' : 'image'
        );

        $this->validate($request, $required);

        $instrucao = Instrucao::company()->findOrNew($id);
        $instrucao->empresa_id = session('site')->id;
        $instrucao->slug = slug($request->nome);
        $instrucao->manual_coleta_id = $request->manual_coleta_id;
        $instrucao->nome = $request->nome;
        $instrucao->subtitulo = $request->subtitulo;
        $instrucao->conteudo = $request->conteudo;     
        $instrucao->video = $request->link;          
        $instrucao->inativo = $request->ativo!="" ? '0' : '1';

             
        if ($request->file('imagem')!=null) {
            $path = public_path() . sprintf('/site/%s/images/categorias/instrucao-coleta', config('app.cliente'));
            $img = str_replace(" ", "-", $request->file('imagem')->getClientOriginalName());
            $request->file('imagem')->move($path, $img);
            $instrucao->imagem = '/site/%s/images/categorias/instrucao-coleta' . $img;
        }

        $instrucao->save();
        Session::flash('flash_message', 'Salvo com sucesso!');
        return redirect('admin/produtos/categorias/manuais/instrucoes/?manual_coleta_id='.$instrucao->manual_coleta_id);
    }


    public function delete(Request $request, $id)
    {
        $instrucao = Instrucao::company()->findOrFail($id);
        $instrucao->delete();
        Session::flash('flash_message', 'Excluido com sucesso!');
        return redirect('admin/produtos/categorias/manuais/instrucoes/?manual_coleta_id='.$instrucao->manual_coleta_id);
    }  
   
}
