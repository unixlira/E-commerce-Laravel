@extends('admin._template')

@section('content')

	<div class="row">
		<div class="title-left" style="display: inline-block;">
			<h3>Artigos</h3>
		</div>
		<a href="{{url('admin/blog/posts/edit/0')}}" class="btn btn-default btn.app col-md-offset-10"><i class="fa fa-plus"></i> Adicionar </a>
	</div>
	<div class="row">
		<div class="x_panel">
			@include('shared.alerts')
			<form action="" method="get" class="form-horizontal" style="text-align: right;">
				<label for="categoria" class="control-label " style="line-height: 27px; display: inline-flex; width: 21%;">Categoria: 
					<select name="categoria" class="form-control" style="display: inline-flex; margin-left: 5px;">
						<option value="" disabled="disabled" selected="true"> Escolha um Opção </option>
						@foreach($categorias as $categoria)
							<option value="{{$categoria->id}}">{{$categoria->nome}}</option>
						@endforeach
					</select>
				</label>
				<label for="busca" class="control-label " style="display: inline-flex; line-height: 27px; margin-left: 5%;">Busca: 
					<input type="search" id="busca" name="busca" class="form-control input-sm" style="display: inline-flex; margin-left: 5px;" value="{{$request->busca}}">
				</label>
				<button class="btn btn-default" type="submit" style="margin-top: 5px; margin-left: 5%;"><i class="fa fa-search"></i> Buscar </button>
			</form>
			<hr/>
			<table class="table table-striped">
				<thead>
					<th class="col-md-3"></th>
					<th class="col-md-3"> Titulo </th>
					<th class="col-md-3"> Categoria </th>
					<th class="col-md-3" style="padding-left: 8%;"> Ações </th>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<td><img src="{{asset('images/artigos/'.$post->imagem)}}" alt="" style="width: 110px; height: 80px;"></td>
							<td>{{$post->titulo}}</td>
							<td>{{$post->categoria->nome}}</td>
							<td style="text-align: right;">
								<a href="{{url('admin/blog/posts/edit/'.$post->id)}}" class="btn btn-default btn.app"><i class="fa fa-edit"></i> Editar</a>
								<a href="{{url('admin/blog/posts/delete/'.$post->id)}}" class="btn btn-default btn.app" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="col-md-offset-5">{!! $posts->render() !!}</div>
		</div>
	</div>
@endsection