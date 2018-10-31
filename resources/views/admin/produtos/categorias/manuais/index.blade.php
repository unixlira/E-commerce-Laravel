@extends('admin._template')

@section('content')
	<div class="row">
		<div class="title-left" style="display: inline-block;">
			<h1>Manual de Coleta</h1>
		</div>
        <div style="float: right;">
            <a href="{{url('admin/produtos/categorias/manuais/create/0')}}" class="btn btn-default btn.app" style="margin-left: 75%;"><i class="fa fa-plus"></i> Adicionar </a>
        </div>
 	</div>
 	<div class="row">
 		<div class="x_panel">
 			<form action="" method="get" class="form-horizontal" style="text-align: right;">
				   <label for="categoria_id" class="control-label" style="display: inline-flex; line-height: 27px;">
					 Categorias: &nbsp;
						<select name="categoria_id" id="categoria_id" class="form-control" style="width: 250px;">
							<option value=""></option>
							@foreach($categorias_select as $categoria)
						<option value="{{$categoria->id}}" {{ ($categoria->id==$request->categoria_id ? 'selected="selected"' : '') }}>{{$categoria->nome}}</option>
							@endforeach
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
					<th class="col-md-2">Nome </th>
                    <th class="col-md-4">Texto</th>
                    <th class="col-md-1">Categoria</th>
                    <th class="col-md-2" style="padding-left: 35%;"> Ações </th>
                </thead>
                <tbody>
				@foreach($manuais as $manual)
 					<tr>
						 <td>{{$manual->nome}}</td>
						 <td>{{$manual->descricao}}</td> 
						 <td>{{$manual->categoria->nome}}</td>
                         <td style="text-align: right;">
 							<a href="{{url('admin/produtos/categorias/manuais/create/'.$manual->id)}}" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
							 <a href="{{url('admin/produtos/categorias/manuais/delete/'.$manual->id)}}" class="btn btn-default" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Excluir</a>
							 <a href="{{url('admin/produtos/categorias/manuais/instrucoes/?manual_coleta_id='.$manual->id)}}" class="btn btn-default"><i class="fa fa-trash"></i> Instruções de Coleta</a>							 
 						</td>
 					</tr>
 				@endforeach 
                </tbody>
            </table>
            <div class="col-md-offset-5">{!! $manuais->render() !!}</div>
 		</div>
 	</div>
@endsection