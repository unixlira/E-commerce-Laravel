@extends('admin._template')

@section('content')
	<div class="row">
		<div class="title-left" style="display: inline-block;">
			<h1>Instrução de Coleta</h1>
		</div>
        <div style="float: right;">
            <a href="{{url('admin/produtos/categorias/manuais/instrucoes/create/0')}}" class="btn btn-default btn.app" style="margin-left: 75%;"><i class="fa fa-plus"></i> Adicionar </a>
        </div>
 	</div>
 	<div class="row">
 		<div class="x_panel">
 			<form action="" method="get" class="form-horizontal" style="text-align: right;">
                <label for="manual_coleta_id" class="control-label" style="display: inline-flex; line-height: 27px;">
                    Manual de Coleta: &nbsp;
                    <select name="manual_coleta_id" id="manual_coleta_id" class="form-control" style="width: 250px;">
                        <option value=""></option>
                        @foreach($manuais_select as $manual)
                        <option value="{{$manual->id}}" {{ ($manual->id==$request->manual_coleta_id ? 'selected="selected"' : '') }}>{{$manual->nome}}</option>
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
                     <th class="col-md-3">Título</th>
                     <th class="col-md-3 ">Subtítulo</th>
                     <th class="col-md-2">Manual de Coleta</th>
                    <th class="col-md-1">Categoria </th>                    
                    <th class="col-md-3" style="padding-left: 20%"> Ações </th>
                </thead>
                <tbody>
                @foreach($instrucoes as $instrucao)
 					<tr>						 
						 <td>{{$instrucao->nome}}</td>
                         <td>{{$instrucao->subtitulo}}</td>
                         <td>{{$instrucao->manual->nome}}</td>
                         <td>{{$instrucao->manual->categoria->nome}}</td>
                         <td style="text-align: right;">
 							<a href="{{url('admin/produtos/categorias/manuais/instrucoes/create/'.$instrucao->id)}}" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
							 <a href="{{url('admin/produtos/categorias/manuais/instrucoes/delete/'.$instrucao->id)}}" class="btn btn-default" onclick="return confirm('Você tem certeza que deseja Excluir?')"><i class="fa fa-trash"></i> Excluir</a>
						</td>
 					</tr>
 				@endforeach 
                </tbody>
            </table>
            <div class="col-md-offset-5">{!! $instrucoes->render() !!}</div>
 		</div>
 	</div>
@endsection