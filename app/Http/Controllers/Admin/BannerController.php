<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Slide;
use Session;

class BannerController extends Controller
{
    public function index()
    {

        $slides = Slide::orderBy('nome')->paginate(5);

        return view('admin.banners.index', compact('slides'));
    }

    public function edit($id)
    {

        $slide = Slide::findOrNew($id);

        return view('admin.banners.create', compact('slide', 'id'));
    }

    public function store(Request $request, $id)
    {
        if ($id==0) {
            $this->validate($request, [
                'imagem' => 'required',

            ]);
        }
        $this->validate($request, [
            'nome' => 'string',
            'subtitulo' => 'string',
            'link' => 'url',
            'imagem' => $id==0?'image|required':'image'

        ]);
        $slide = Slide::company()->findOrNew($id);
        $slide->empresa_id = session('site')->id;
        $slide->nome = $request->nome;
        $slide->subtitulo = $request->subtitulo;
        $slide->link = $request->link;
        $request->ativo=='on'?$slide->inativo=0:$slide->inativo=1;
       
        if ($request->file('imagem')!=null) {
            $path = public_path() . sprintf('/site/%s/images/banners/', config('app.cliente'));
            $img = str_replace(" ", "-", $request->file('imagem')->getClientOriginalName());
            $request->file('imagem')->move($path, $img);
            $slide->imagem = 'images/banners/' . $img;
        }
        $slide->save();

        Session::flash('flash_message', 'Salvo com sucesso!');

        return redirect('admin/banners');
    }

    public function delete(Request $request, $id)
    {

        $slide = Slide::company()->find($id);
        $slide->delete();
        Session::flash('flash_message', 'Excluido com sucesso!');
        return redirect('admin/banners');
    }
}
