@extends('admin._template')

@section('content')

    <div class="title-left" style="display: inline-block;">
        <h1>Cadastrar Instruções de Coleta</h1>
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
                                    <label for="manual_coleta_id" class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Manual de Coleta:</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="manual_coleta_id" id="manual_coleta_id" class="form-control">
                                            <option value=""></option>
                                            @foreach($manuais_select as $manual)
                                            <option value="{{$manual->id}}" {{ ($manual->id==$instrucao->manual_coleta_id ? 'selected="selected"' : '') }}>{{$manual->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>                                   
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <label for="nome" class="control-label col-md-3 col-sm-3 col-xs-12">Nome: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="nome" type="text" class="form-control col-md-7 col-xs-12" value="{{$instrucao->nome}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <label for="subtitulo" class="control-label col-md-3 col-sm-3 col-xs-12">Subtítulo: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="subtitulo" type="text" class="form-control col-md-7 col-xs-12" value="{{$instrucao->subtitulo}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                                        
                                <div class="form-group">
                                    <label for="conteudo" class="control-label col-md-3 col-sm-3 col-xs-12">Conteúdo: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="10" name="conteudo" id="conteudo" type="text" class="form-control">{{$instrucao->conteudo}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="video" class="control-label col-md-3 col-sm-3 col-xs-12">Vídeo: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="link" type="text" class="form-control col-md-7 col-xs-12" value="{{$instrucao->video}}">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                                            
                                <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <label for="imagem" class="control-label col-md-3 col-sm-3 col-xs-12">Imagem: </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="imagem" id="imagem" type="file" class="form-control" {{ !isset($instrucao->imagem) ? 'required' : ''}} required>
                                        </div>
                                    </div>                                    
                           
                                <div class="form-group">
							        <label for="ativo" class="control-label col-md-3 col-sm-3 col-xs-12">Ativo: </label>
							        <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="checkbox">
                                            <div class="">
                                                <input type="checkbox" name="ativo" id="ativo" class="flat" style="margin-left: 0px;">
                                            </div>
                                            <div class="{{ $instrucao->inativo==1?'':'checked' }}">
                                            <input type="checkbox" name="ativo" id="ativo" class="flat" {{ $instrucao->inativo==1?'': 'checked="checked"'}} style="margin-left: 0px;"></div>
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
