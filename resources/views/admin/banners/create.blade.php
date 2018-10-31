@extends('admin._template')
@section('content')
	<h3>Cadastro de Banner</h3>

	<div class="clearfix"></div>
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
					<form action="{{url('admin/banners/edit/'.$id)}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group">
							<label for="nome" class="control-label col-md-3 col-sm-3 col-xs-12">Titulo: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="nome" id="nome" type="text" class="form-control col-md-7 col-xs-12" value="{{$slide->nome}}">
							</div>
						</div>
						<div class="form-group">
							<label for="subtitulo" class="control-label col-md-3 col-sm-3 col-xs-12">Subtítulo: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="subtitulo" id="subtitulo" type="text" class="form-control col-md-7 col-xs-12" value="{{$slide->subtitulo}}">
							</div>
						</div>
						<div class="form-group">
							<label for="link" class="control-label col-md-3 col-sm-3 col-xs-12">Link: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="url" name="link" id="link" class="form-control col-md-7 col-xs-12" value="{{$slide->link}}"></input>
							</div>
						</div>
						<div class="form-group">
							<label for="ativo" class="control-label col-md-3 col-sm-3 col-xs-12">Ativo: </label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="checkbox">
									<div class="{{ $slide->inativo==1?'':'checked' }}">
									<input type="checkbox" name="ativo" id="ativo" class="flat" {{ $slide->inativo==1?'': 'checked="checked"'}} style="margin-left: 0px;"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="imagem" class="control-label col-md-3 col-sm-3 col-xs-12">Imagem: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="imagem" id="imagem" type="file" class="form-control col-md-7 col-xs-12" {{$slide->imagem==""?'required':''}}>
							</div>
						</div>
						@if($slide->imagem!="")
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<img style="width: 100%; height: 100%;" src="{{ assetsCliente($slide->imagem) }}" alt="">
								</div>
							</div>
						@endif
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-9">
								<button type="submit" class="btn btn-default">Salvar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection