@extends('site._template')

@section('content')


		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente($categoria->imagem_destaque)}}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1 style="text-shadow: 2px 2px 4px #000000;">{{$categoria->nome}}</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu" class="no-sticky">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Serviços - <span>{{$categoria->nome}}</span></div>

					<nav>
						<ul>
							<li class=""><a href="/categorias/{{$categoria->slug}}"><div>Lista de exames</div></a></li>
							<li class="current"><a href="/categorias/{{$categoria->slug}}/manuais"><div>Manual de coleta</div></a></li>
							<li class=""><a href="/categorias/{{$categoria->slug}}/formularios"><div>Formulários para envio</div></a></li>
							<li class=""><a href="/categorias/{{$categoria->slug}}/politicas"><div>Políticas da empresa</div></a></li>
						</ul>
					</nav>

				<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="row clearfix">
						<div class="col-md-12">
							<div class="heading-block center">
								<h2>Manual de Coleta</h2>
							</div>
							@foreach($manuais as $manual)
								<div class="fancy-title title-border-color">
									<h2>{{$manual->nome}}</h2>							    
								</div>
							
								<p>{{$manual->descricao}}</p>

							{{-- ---- INSTRUCAO --}}
							@foreach($manual->instrucoes()->ativo()->orderBy('nome')->get() as $instrucao)
								<div class="col-md-6 bottommargin-sm">							
									<h3><span class="subtitle">{{$instrucao->nome}}</span></h3>
									<h5>{{$instrucao->subtitulo}}</h5>	
									<ol class="list-group">
									{!! $instrucao->conteudoLi() !!}
									</ol>
								</div>

								<div class="col-md-6">
									<div class="bottommargin">
									@if($instrucao->video != '')
										<iframe width="560" height="315" src="{{$instrucao->video}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
										@else
											<img src="{{ assetsCliente($instrucao->imagem) }}" alt="Laboratório Fachada">
										@endif
								
									</div>
								</div>
							@endforeach
							{{-- ---- INSTRUCAO --}}
							<div class="clear"></div>
							@endforeach												

						</div>	
					</div>
				</div>
			</div>
		</section><!-- #content end -->
@endsection


@section('scripts')
        
@endsection