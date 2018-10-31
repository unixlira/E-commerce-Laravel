@extends('admin._template')

@section('content')

	<h3>Edição de Comentario</h3>

	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					@include('shared.alerts')
					<br>
					<form action="{{url('admin/blog/comentarios/edit/'.$comentario->id)}}" class="form-horizontal form-label-left" method="post" >
					{{csrf_field()}}
						<div class="form-group">
							<label for="" class="control-label col-md-3 col-sm-3 col-xs-12"> Post:</label>
							<div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 9px;">
								 {{$comentario->post->titulo}}
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="control-label col-md-3 col-sm-3 col-xs-12 " >Comentario: </label>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 9px;">
								{{$comentario->descricao}}
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Usuario: </label>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 9px;">{{$comentario->pessoa->nome}} - feito em {{$comentario->updated_at->format('d/m/Y H:i')}}</div>
						</div>
						<div class="form-group">
							<label for="resposta" class="control-label col-md-3 col-sm-3 col-xs-12">Resposta: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea name="resposta" class="form-control col-md-7 col-xs-12">{{$comentario->resposta}}</textarea>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-9">
								<button class="btn btn-default"> Salvar </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection