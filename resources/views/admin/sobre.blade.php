@extends('admin._template')
@section('content')
	<h1>Sobre Nós</h1>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
				@if(count($errors)>0)
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				@endif
					<br>
					<form action="{{url('admin/sobre-nos')}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group">
							<label for="texto_esquerda" class="control-label col-md-12 col-sm-12 col-xs-12">Texto Esquerda: </label>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea rows="10" name="texto_esquerda" id="texto_esquerda" type="text" class="form-control">{{ $sobre->texto_esquerda }}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="texto_direita" class="control-label col-md-12 col-sm-12 col-xs-12">Texto Direita: </label>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea rows="10" name="texto_direita" id="texto_direita" class="form-control">{{ $sobre->texto_direita }}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="missao" class="control-label col-md-12 col-sm-12 col-xs-12">Missão: </label>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea rows="10" name="missao" id="missao" class="form-control">{{ $sobre->missao }}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="visao" class="control-label col-md-12 col-sm-12 col-xs-12">Visão: </label>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea rows="10" name="visao" id="visao" class="form-control">{{ $sobre->visao }}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="valores" class="control-label col-md-12 col-sm-12 col-xs-12">Qualidade: </label>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea rows="10" name="valores" id="valores" class="form-control">{{ $sobre->valores }}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="imagem" class="control-label col-md-12 col-sm-12 col-xs-12">Imagem: </label>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<input name="imagem" id="imagem" type="file" class="form-control" {{$sobre->imagem==""?'required':''}}>
							</div>
						</div>
						@if($sobre->imagem!="")
							<div class="form-group">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<img style="max-width: 100%; max-height: 100%;" src="{{ assetsCliente($sobre->imagem) }}" alt="">
								</div>
							</div>
						@endif
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<button type="submit" class="btn btn-default">Salvar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection