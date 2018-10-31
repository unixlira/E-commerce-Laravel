@extends('admin._template')

@section('content')



    <div class="title-left" style="display: inline-block;">
        	<h1>Cadastrar Arquivos</h1>
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
                                        Categoria:</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="categoria_id" id="categoria_id" class="form-control" required>
                                            <option value=""></option>
                                              @foreach($categorias_select as $item)
                                                <option value="{{$item->id}}" {{ ($item->id==$arquivo->categoria_id ? 'selected="selected"' : '') }}>{{$item->nome}}</option>
                                              @endforeach                                            
                                        </select>
                                    </div>                                   
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                <label for="nome" class="control-label col-md-3 col-sm-3 col-xs-12">Nome: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="nome" type="text" class="form-control col-md-7 col-xs-12" value="{{$arquivo->nome}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <label for="tipo" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="tipo" type="text" class="form-control col-md-7 col-xs-12" value="{{$arquivo->tipo}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                                        
                                
									                                                           
                                <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <label for="arquivo" class="control-label col-md-3 col-sm-3 col-xs-12">Arquivo: </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="arquivo" id="arquivo" type="file" class="form-control">
                                        </div>
                                    </div>  
                                     @if($arquivo->arquivo!="")
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="{{ assetsCliente($arquivo->arquivo) }}" target="_blank">Download</a>
                                            </div>
                                        </div>
                                    @endif                                  
                           
                                
                                <div class="form-group">
							        <label for="ativo" class="control-label col-md-3 col-sm-3 col-xs-12" value="{{$arquivo->inativo}}">Ativo: </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="checkbox">                                            
                                                    <div class="{{ $arquivo->inativo==1?'':'checked' }}">
                                                        <input type="checkbox" name="ativo" id="ativo" class="flat" {{ $arquivo->inativo==1?'': 'checked="checked"'}} style="margin-left: 0px;">
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

