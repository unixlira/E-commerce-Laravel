@extends('admin._template')

@section('content')
	<div class="row">
		<div class="title-left" style="display: inline-block;">
			<h3>Categorias Blog</h3>
		</div>
 		<a href="{{url('admin/blog/categorias/edit/0')}}" class="btn btn-default btn.app" style="margin-left: 75%;"><i class="fa fa-plus"></i> Adicionar </a>
 	</div>
 	<div class="row">
 		<div class="x_panel">
 			<form action="" method="get" class="form-horizontal" style="text-align: right;">
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
 					<th class="col-md-9"> Nomes </th>
 					<th class="col-md-3" style="padding-left: 8%"> Ações </th>
 				</thead>
 				<tbody>
 				@foreach($categorias as $categoria)
 					<tr>
 						<td>{{$categoria->nome}}</td>
 						<td style="text-align: right;">
 							<a href="{{url('admin/blog/categorias/edit/'.$categoria->id)}}" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
 							<a href="{{url('admin/blog/categorias/delete/'.$categoria->id)}}" class="btn btn-default" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Excluir</a>
 						</td>
 					</tr>
 				@endforeach
 				</tbody>
 			</table>
 			<div class="col-md-offset-5">{{$categorias->render()}}</div>
 		</div>
 	</div>
@endsection