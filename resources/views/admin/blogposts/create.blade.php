@extends('admin._template')

@section('content')

	<h3>Cadastro de Artigos</h3>

	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					@include('shared.alerts')
					<br>
					<form action="{{ url('admin/blog/posts/edit/'.$id) }}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
						<div class="form-group">
							<label for="titulo" class="control-label col-md-3 col-sm-3 col-xs-12">Titulo: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control col-md-7 col-xs-12" name="titulo" value="{{$post->titulo}}" required>
							</div>
						</div>
						<div class="form-group">
							<label for="categoria" class="control-label col-md-3 col-sm-3 col-xs-12">Categoria: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="categoria" class="form-control" {{$id==0?'required':''}}>
									<option value="" disabled selected>Escolha uma opção</option>
									@foreach($categorias as $categoria)
										<option value="{{$categoria->id}}">{{$categoria->nome}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="funcionario" class="control-label col-md-3 col-sm-3 col-xs-12">Autor: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="funcionario" class="form-control" {{$id==0?'required':''}}>
									<option value="" disabled selected>Escolha uma opção</option>
									@foreach($funcionarios as $funcionario)
										<option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="descricao" class="control-label col-md-3 col-sm-3 col-xs-12">Descrição: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea  style="width: 535px; height: 165px" name="descricao" class="form-control col-md-7 col-xs-12" required>{{$post->descricao}}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="ativo" class="control-label col-md-3 col-sm-3 col-xs-12">Ativo: </label>
							<div class="checkbox">
								<div class="icheckbox_flat-green {{$post->inativo==1?'':'checked' }}" style="position: relative;">
									<input type="checkbox" name="ativo" class="flat" style="position: absolute; opacity: 0;" {{$post->inativo==1?'':'checked="checked"'}}>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="imagem" class="control-label col-md-3 col-sm-3 col-xs-12">Imagem: </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="imagem" class="form-control col-md-7 col-xs-12" {{$id==0?'required':''}}>
							</div>
						</div>
						@if($post->imagem!="")
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xl-12 col-md-offset-3"><img src="{{asset('images/artigos/'.$post->imagem)}}" style="width: 100%"></div>
							</div>
						@endif
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