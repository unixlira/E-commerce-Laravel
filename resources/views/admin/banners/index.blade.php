@extends('admin._template')

@section('content')
	<div class="row">
		<div class="title-left" style="display: inline-block;">
			<h1>Banners</h1>
		</div>
 		<div style="float: right;">
			<a href="{{url('admin/banners/edit/0')}}"><button class="btn btn-default btn.app" style="margin-left: 80%;"><i class="fa fa-plus"></i> Adicionar</button></a>
        </div>
 	</div>
	<div class="row">
		<div class="x_panel">
			@include('shared.alerts')
			<table class="table table-striped">
				<thead>
					<th class="col-md-0">Titulo</th>
					<th class="col-md-6">Subtítulo</th>
					<th class="col-md-2">Link</th>
					<th class="col-md-1">Status</th>
					<th class="col-md-1" style="text-align:center;">Ações</th>
				</thead>
				<tbody>
					@foreach($slides as $slide)
						<tr>
							<td>{{$slide->nome}}</td>
							<td>{{$slide->subtitulo}}</td>
							<td>{{$slide->link}}</td>
							<td>{{getStatus($slide->inativo)}}</td>
							<td rowspan="2" style="text-align: center;">
								<a href="{{url('admin/banners/edit/'.$slide->id)}}" class="btn btn-default btn.app"><i class="fa fa-edit"></i> Editar </a>
								<br /><br />
								<a href="{{url('admin/banners/delete/'.$slide->id)}}" class="btn btn-default btn.app"onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash" ></i> Excluir </a>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="text-align:center;"><img style="height:200px;" src="{{ assetsCliente($slide->imagem) }}" alt="{{$slide->nome}}" title="{{$slide->nome}}"></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="col-md-offset-5">{!!$slides->render()!!}</div>
		</div>
	</div>
@endsection