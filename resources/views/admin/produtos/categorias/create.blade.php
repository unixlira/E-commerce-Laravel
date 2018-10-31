@extends('admin._template')

@section('content')



    <div class="title-left" style="display: inline-block;">
        	<h1>Cadastro de Categorias</h1>
    </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        @include('shared.alerts')
                        <br />
                        <form action="" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}                            
                                
                                    <div class="form-group">
                                        <label for="categoria_id" class="control-label col-md-3 col-sm-3 col-xs-12">
                                            Categoria Pai:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="categoria_id" id="categoria_id" class="form-control control-label col-md-3 col-sm-3 col-xs-12">
                                                <option value=""></option>
                                                @foreach($categorias_select as $item)
                                                <option value="{{$item->id}}" {{ ($item->id==$categoria->categoria_id ? 'selected="selected"' : '') }}>{{$item->nome}}</option>
                                                @endforeach
                                            </select>
                                        </div>                                   
                                    </div>
                                <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <label for="nome" class="control-label col-md-3 col-sm-3 col-xs-12">Nome: </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="nome" type="text" class="form-control col-md-7 col-xs-12" value="{{$categoria->nome}}" required>
                                        </div>
                                    </div>
                                <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <label for="subtitulo" class="control-label col-md-3 col-sm-3 col-xs-12">Subtítulo: </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="subtitulo" type="text" class="form-control col-md-7 col-xs-12" value="{{$categoria->subtitulo}}" required>
                                        </div>
                                    </div>

                                <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <label for="imagemdestaque" class="control-label col-md-3 col-sm-3 col-xs-12" value="">Imagem de Destaque: </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="imagemdestaque" id="imagemdestaque" type="file" class="form-control">
                                        </div>
                                    </div>
                                    @if($categoria->imagem_destaque!="")
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <img style="width: 100%; height: 100%;" src="{{ assetsCliente($categoria->imagem_destaque) }}" alt="">
                                            </div>
                                        </div>
                                    @endif

									<div class="ln_solid"></div>
                                    <div class="form-group">
                                        <label for="imagemtopo" class="control-label col-md-3 col-sm-3 col-xs-12" value="">Imagem do Topo: </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="imagemtopo" id="imagemtopo" type="file" class="form-control">
                                        </div>
                                    </div>
                                     @if($categoria->imagem!="")
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <img style="width: 100%; height: 100%;" src="{{ assetsCliente($categoria->imagem) }}" alt="">
                                            </div>
                                        </div>
                                    @endif
									                                                           
                                <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <label for="arquivo" class="control-label col-md-3 col-sm-3 col-xs-12" value="{{$categoria->arquivo}}">Arquivo PDF (Lista de Exames): </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="arquivo" id="arquivo" type="file" class="form-control">
                                        </div>
                                    </div>
                                     @if($categoria->arquivo!="")
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="{{ assetsCliente($categoria->arquivo) }}" target="_blank">Download</a>
                                            </div>
                                        </div>
                                    @endif
                                                        
                                    <div class="form-group">
                                        <label for="textoesquerda" class="control-label col-md-3 col-sm-3 col-xs-12" value="">Texto Esquerda do Formulário de envio: </label>                   
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea rows="10" name="textoesquerda" id="textoesquerda" type="text" class="form-control">{{$categoria->texto_esquerda}}</textarea>
                                        </div>
                                    </div>

								   <div class="form-group">
                                            <label for="textodireita" class="control-label col-md-3 col-sm-3 col-xs-12" value="">Texto Direita do formulário de envio: </label>                  
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="10" name="textodireita" id="textodireita" type="text" class="form-control">{{$categoria->texto_direita}}</textarea>
                                        </div>
								    </div>
								
								 <div class="ln_solid"></div>                                    
                           
                                <div class="form-group">
							        <label for="ativo" class="control-label col-md-3 col-sm-3 col-xs-12" value="{{$categoria->inativo}}">Ativo: </label>
							        <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="checkbox">                                            
                                                <div class="{{ $categoria->inativo==1?'':'checked' }}">
                                                    <input type="checkbox" name="ativo" id="ativo" class="flat" {{ $categoria->inativo==1?'': 'checked="checked"'}} style="margin-left: 0px;">
                                                </div>
                                        </div>
							        </div>						    
                            
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-default"> Salvar </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

