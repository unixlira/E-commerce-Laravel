@extends('admin._template')

@section('content')
	<div class="row">
		<h1>Cadastro de Clientes</h1>
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
							<label for="nome" class="control-label col-md-3 col-sm-3 col-xs-12">Nome: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="nome" type="text" class="form-control col-md-7 col-xs-12" value="{{$editora->nome or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="link" class="control-label col-md-3 col-sm-3 col-xs-12">Link: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="link" type="text" class="form-control col-md-7 col-xs-12" value="{{$editora->link or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="imagem" class="control-label col-md-3 col-sm-3 col-xs-12">Imagem: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="imagem" id="imagem" type="file" class="form-control" {{ !isset($editora->imagem) ? 'required' : ''}}>
							</div>
						</div>
						@if(isset($editora->imagem) && $editora->imagem!="")
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<img style="max-width: 100%; max-height: 100%;" src="{{ assetsCliente($editora->imagem) }}" alt="">
								</div>
							</div>
						@endif
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