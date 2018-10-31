@extends('admin._template')

@section('content')
	<div class="row">
		<div class="title-left" style="display: inline-block;">
			<h1>Manual de Coleta</h1>
		</div>
        <div style="float: right;">
            <a href="{{url('admin/distribuidores/create/0')}}" class="btn btn-default btn.app" style="margin-left: 75%;"><i class="fa fa-plus"></i> Adicionar </a>
        </div>
 	</div>
 	<div class="row">
 		<div class="x_panel">
 			<form action="" method="get" class="form-horizontal" style="text-align: right;">
				<label for="categoria_id" class="control-label" style="display: inline-flex; line-height: 27px;">
					 Categorias: &nbsp;
						<select name="categoria_id" id="categoria_id" class="form-control" style="width: 250px;">
							<option value=""></option>
							?
						{{--  <option value="{{$categoria->id}}" {{ ($categoria->id==$request->categoria_id ? 'selected="selected"' : '') }}>{{$categoria->nome}}</option>
							?  --}}
						</select>
					</label>	 
				<label for="busca" class="control-label" style="display: inline-flex; line-height: 27px;">
 					Busca: 
 						<input type="search" name="busca" id="busca" class="form-control input-sm" value="{{$request->busca}}" style="display: inline-flex; margin-left: 5px;">
 					</label>
 				<button class="btn btn-default" type="submit" style="margin-top: 5px; margin-left: 5%;"> <i class="fa fa-search"></i> Buscar </button>
 			</form>
 			<hr/>
 			@include('shared.alerts')
            <table class="table table-striped">
                <thead>
                    <th class="col-md-1">Categoria</th>
                    <th class="col-md-2">Nome </th>
                    <th class="col-md-3">Texto</th>
                    {{--  <th class="col-md-1">UF</th>
                    <th class="col-md-1">Status </th>  --}}
                    <th class="col-md-2" style="padding-left: 15%"> Ações </th>
                </thead>
                <tbody>
 				@foreach($distribuidores as $distribuidor)
 					<tr>
                        <td>{{$distribuidor->categoria_id}}</td>
                        <td>{{$distribuidor->nome}}</td>
                        <td>{{$distribuidor->descricao}}</td>
                        {{--  <td>{{$distribuidor->uf}}</td>
                        <td>{{getStatus($distribuidor->inativo)}}</td>  --}}
 						<td style="text-align: right;">
 							<a href="{{url('admin/distribuidores/create/'.$distribuidor->id)}}" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
							 <a href="{{url('admin/distribuidores/delete/'.$distribuidor->id)}}" class="btn btn-default" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Excluir</a>
							 <a href="{{url('admin/distribuidores/delete/'.$distribuidor->id)}}" class="btn btn-default" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Instruções de Coleta</a>
 						</td>
 					</tr>
 				@endforeach
                </tbody>
            </table>
            <div class="col-md-offset-5">{!! $distribuidores->render() !!}</div>
 		</div>
 	</div>
@endsection