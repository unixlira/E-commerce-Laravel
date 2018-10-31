@extends('admin._template')

@section('content')

	<h1>Cadastro de Distribuidores</h1>

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
							<label for="titulo" class="control-label col-md-2 col-sm-2 col-xs-12">Título: </label>
							<div class="col-md-10 col-sm-10 col-xs-12">
								<input name="titulo" type="text" class="form-control" value="{{$distribuidor->titulo or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="nome" class="control-label col-md-2 col-sm-2 col-xs-12">Nome: </label>
							<div class="col-md-10 col-sm-10 col-xs-12">
								<input name="nome" type="text" class="form-control" value="{{$distribuidor->nome or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="cep" class="control-label col-md-2 col-sm-2 col-xs-12">CEP: </label>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<input name="cep" type="text" class="form-control" value="{{$distribuidor->cep or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="rua" class="control-label col-md-2 col-sm-2 col-xs-12">Rua: </label>
							<div class="col-md-10 col-sm-10 col-xs-12">
								<input name="rua" type="text" class="form-control" value="{{$distribuidor->rua or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="numero" class="control-label col-md-2 col-sm-2 col-xs-12">Número: </label>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<input name="numero" type="text" class="form-control" value="{{$distribuidor->numero or ""}}" required>
							</div>
							<label for="complemento" class="control-label col-md-2 col-sm-2 col-xs-12">Complemento: </label>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<input name="complemento" type="text" class="form-control" value="{{$distribuidor->complemento or ""}}">
							</div>
							<label for="bairro" class="control-label col-md-1 col-sm-1 col-xs-12">Bairro: </label>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<input name="bairro" type="text" class="form-control" value="{{$distribuidor->bairro or ""}}" required>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="cidade" class="control-label col-md-2 col-sm-2 col-xs-12">Cidade: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="cidade" type="text" class="form-control" value="{{$distribuidor->cidade or ""}}" required>
							</div>
							<label for="uf" class="control-label col-md-1 col-sm-1 col-xs-12">UF: </label>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<select name="uf" id="uf" class="form-control" required="">
									<option value=""></option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='AC' ? 'selected="selected"' : '' !!}>AC</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='AL' ? 'selected="selected"' : '' !!}>AL</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='AP' ? 'selected="selected"' : '' !!}>AP</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='AM' ? 'selected="selected"' : '' !!}>AM</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='BA' ? 'selected="selected"' : '' !!}>BA</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='CE' ? 'selected="selected"' : '' !!}>CE</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='DF' ? 'selected="selected"' : '' !!}>DF</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='ES' ? 'selected="selected"' : '' !!}>ES</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='GO' ? 'selected="selected"' : '' !!}>GO</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='MA' ? 'selected="selected"' : '' !!}>MA</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='MT' ? 'selected="selected"' : '' !!}>MT</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='MS' ? 'selected="selected"' : '' !!}>MS</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='MG' ? 'selected="selected"' : '' !!}>MG</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='PA' ? 'selected="selected"' : '' !!}>PA</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='PB' ? 'selected="selected"' : '' !!}>PB</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='PR' ? 'selected="selected"' : '' !!}>PR</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='PE' ? 'selected="selected"' : '' !!}>PE</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='PI' ? 'selected="selected"' : '' !!}>PI</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='RJ' ? 'selected="selected"' : '' !!}>RJ</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='RN' ? 'selected="selected"' : '' !!}>RN</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='RS' ? 'selected="selected"' : '' !!}>RS</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='RO' ? 'selected="selected"' : '' !!}>RO</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='RR' ? 'selected="selected"' : '' !!}>RR</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='SC' ? 'selected="selected"' : '' !!}>SC</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='SP' ? 'selected="selected"' : '' !!}>SP</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='SE' ? 'selected="selected"' : '' !!}>SE</option>
									<option {!! isset($distribuidor->uf) && $distribuidor->uf=='TO' ? 'selected="selected"' : '' !!}>TO</option>
								</select>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="telefone" class="control-label col-md-2 col-sm-2 col-xs-12">Telefone: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="telefone" type="text" class="form-control" value="{{$distribuidor->telefone or ""}}">
							</div>
							<label for="fax" class="control-label col-md-1 col-sm-1 col-xs-12">Fax: </label>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<input name="fax" type="text" class="form-control" value="{{$distribuidor->fax or ""}}">
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="email" class="control-label col-md-2 col-sm-2 col-xs-12">E-mail: </label>
							<div class="col-md-10 col-sm-10 col-xs-12">
								<input name="email" type="email" class="form-control" value="{{$distribuidor->email or ""}}">
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<label for="ativo" class="control-label col-md-2 col-sm-2 col-xs-12">Ativo: </label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="checkbox">
									<div class="{{ isset($distribuidor->inativo) && $distribuidor->inativo==1?'':'checked' }}">
									<input type="checkbox" name="ativo" id="ativo" value="0" class="flat" {{ isset($distribuidor->inativo) && $distribuidor->inativo==1?'': 'checked="checked"'}} style="margin-left: 0px;"></div>
								</div>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-9">
								<button type="submit" class="btn btn-default"> Salvar </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection