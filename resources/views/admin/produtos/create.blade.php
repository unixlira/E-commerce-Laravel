@extends('admin._template')

@section('content')

    <div class="title-left" style="display: inline-block;">
        <h1>Cadastro de Produto</h1>
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
                                            <option value="{{$item->id}}" {{ ($item->id==$produto->categoria_id ? 'selected="selected"' : '') }}>{{$item->nome}}</option>
                                            @if($item->categorias()->count()>0)
                                                @foreach($item->categorias as $subcategoria)
                                                <option value="{{$subcategoria->id}}" {{ ($subcategoria->id==$produto->categoria_id ? 'selected="selected"' : '') }}>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    {{$subcategoria->nome}}
                                                </option>
                                                @endforeach
                                            @endif
                                            @endforeach                                            
                                        </select>
                                    </div>                                   
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <label for="nome" class="control-label col-md-3 col-sm-3 col-xs-12">Nome: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="nome" type="text" class="form-control col-md-7 col-xs-12" value="{{$produto->nome or old('nome')}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <label for="subtitulo" class="control-label col-md-3 col-sm-3 col-xs-12">Subtítulo: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="subtitulo" type="text" class="form-control col-md-7 col-xs-12" value="{{$produto->subtitulo or old('subtitulo')}}" >
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <label for="codigo" class="control-label col-md-3 col-sm-3 col-xs-12">Código: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="codigo" type="text" class="form-control col-md-7 col-xs-12" value="{{$produto->codigo or old('codigo')}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <label for="preco" class="control-label col-md-3 col-sm-3 col-xs-12">Preço: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="preco" type="text" class="form-control col-md-7 col-xs-12" value="{{valor($produto->preco or old('preco'), 2)}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                                        
                                <div class="form-group">
                                    <label for="descricao" class="control-label col-md-3 col-sm-3 col-xs-12">Descrição: </label>                   <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="10" name="descricao" id="descricao" type="text" class="form-control">{{$produto->descricao or old('descricao')}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="prazo" class="control-label col-md-3 col-sm-3 col-xs-12">Prazo: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="prazo" type="text" class="form-control col-md-7 col-xs-12" value="{{$produto->prazo or old('prazo')}}" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                 <div class="form-group">
                                    <label for="amostra" class="control-label col-md-3 col-sm-3 col-xs-12">Tipos de Amostra: </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="amostra" type="text" class="form-control col-md-7 col-xs-12" value="{{$produto->tipos_de_amostra or old('amostra')}}">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>                                                            
                                                                 
                           
                                <div class="form-group">
							        <label for="ativo" class="control-label col-md-3 col-sm-3 col-xs-12">Ativo: </label>
							        <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="checkbox">
                                            <div class="">
                                                <input type="checkbox" name="ativo" id="ativo" class="flat" style="margin-left: 0px;">
                                            </div>
                                            <div class="{{ $produto->inativo==1?'':'checked' }}">
                                            <input type="checkbox" name="ativo" id="ativo" class="flat" {{ $produto->inativo or old('ativo')==1?'': 'checked="checked"'}} style="margin-left: 0px;"></div>
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
