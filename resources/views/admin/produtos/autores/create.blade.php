@extends('admin._template')

@section('content')

	<h1>Cadastro Manual de Coleta</h1>

	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					@include('shared.alerts')
					<br>
					<form action="" class="form-horizontal form-label-left" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<label for="nome" class="control-label col-md-3 col-sm-3 col-xs-12">Nome: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="nome" type="text" class="form-control col-md-7 col-xs-12" value="{{$autor->nome or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-9">
								<button type="submit" class="btn btn-default"> Salvar </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection