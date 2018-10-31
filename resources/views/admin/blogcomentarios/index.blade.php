@extends('admin._template')

@section('content')
	<div class="title-left">
		<h3>Comentários</h3>
	</div>
	<div class="x_panel">
		@include('shared.alerts')
		<table class="table table-stripped" style="table-layout: fixed;">
			<thead>
				<th> Artigo </th>
				<th> Usuário </th>
				<th> Descrição </th>
				<th> Resposta </th>
				<th> Data </th>
				<th> Ações </th>
			</thead>
			<tbody>
				@foreach($comentarios as $comentario)
					<tr>
						<td>{{$comentario->post->titulo}}</td>
						<td>{{$comentario->pessoa->nome}}</td>
						<td>{{$comentario->descricao}}</td>
						<td>{{$comentario->resposta}}</td>
						<td>{{$comentario->created_at->format('d/m/Y H:i:s')}}</td>
						<td style="text-align: right; padding-left: 2px;box-sizing: content-box">
							<a  style="display: table-cell;" class="btn btn-default" href="{{url('admin/blog/comentarios/edit/'.$comentario->id)}}"><i class="fa fa-edit"> </i> Editar </a>
							<a style="display: table-cell;" class="btn btn-default" href="{{url('admin/blog/comentarios/delete/'.$comentario->id)}}" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Excluir </a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection