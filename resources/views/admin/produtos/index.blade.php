@extends('admin._template')

@section('content')
	<div class="row">
		<div class="title-left" style="display: inline-block;">
			<h1>Produtos</h1>
		</div>
        <div style="float: right;">
            <a href="{{url('admin/produtos/create/0')}}" class="btn btn-default btn.app" style="margin-left: 75%;"><i class="fa fa-plus"></i> Adicionar </a>
        </div>
 	</div>
 	<div class="row">
 		<div class="x_panel">
 			<form action="" method="get" class="form-horizontal" style="text-align: right;">
				 <label for="categoria_id" class="control-label" style="display: inline-flex; line-height: 27px;">
					 Categorias: &nbsp;
						<select name="categoria_id" id="categoria_id" class="form-control" style="width: 250px;">
							<option value=""></option>
							@foreach($categorias_select as $categoria)
							<option value="{{$categoria->id}}" {{ ($categoria->id==$request->categoria_id ? 'selected="selected"' : '') }}>{{$categoria->nome}}</option>
							@if($categoria->categorias()->count()>0)
								@foreach($categoria->categorias as $subcategoria)
								<option value="{{$subcategoria->id}}" {{ ($subcategoria->id==$request->categoria_id ? 'selected="selected"' : '') }}>
									&nbsp;&nbsp;&nbsp;&nbsp;
									{{$subcategoria->nome}}
								</option>
								@endforeach
							@endif
							@endforeach
						</select>
					</label>
 					<label for="busca" class="control-label" style="display: inline-flex; line-height: 27px;">
 						Busca: 
 						<input type="search" name="busca" id="busca" class="form-control input-sm" value="{{$request->busca}}" style="display: inline-flex; margin-left: 5px;">
 					</label>
 				<button class="btn btn-default" type="submit" style="margin-top: 5px; margin-left: 5%;"> <i class="fa fa-search"></i> Buscar </button>
 			</form>
 			<hr/>
 			@include('shared.alerts')
 			<table class="table table-striped">
 				<thead>                    
                    <th class="col-md-5">Nome </th>
                    <th class="col-md-2">Categoria </th>
 					<th class="col-md-1">Status </th>
 					<th class="col-md-2" style="padding-left: 8%"> Ações </th>
 				</thead>
 				<tbody>
 				@foreach($produtos as $produto)
 					<tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->categoria->nome}}</td>
                        <td>{{getStatus($produto->inativo)}}</td>
 						<td style="text-align: right;">
 							<a href="{{url('admin/produtos/create/'.$produto->id)}}" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
 							<a href="{{url('admin/produtos/delete/'.$produto->id)}}" class="btn btn-default" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Excluir</a>
 						</td>
 					</tr>
 				@endforeach
 				</tbody>
 			</table>
 			<div class="col-md-offset-5">{!! $produtos->render() !!}</div>
 		</div>
 	</div>
@endsection