@extends('site._template')

@section('content')
<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente($categoria->imagem_destaque) }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

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
							<li class=""><a href="/categorias/{{$categoria->slug}}/manuais"><div>Manual de coleta</div></a></li>
							<li class="current"><a href="/categorias/{{$categoria->slug}}/formularios"><div>Formulários para envio</div></a></li>
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
								<h2>Formulários para envio</h2>
							</div>

							<div class="col-md-6 bottommargin-sm">
								<p>{{$categoria->texto_direita}}</p>
							</div>

							<div class="col-md-6">
								<p>{{$categoria->texto_esquerda}}</p>
							</div>

							<div class="col-md-12">

								<div class="row clear-bottommargin">
									@foreach($arquivos as $arquivo)
									<div class="col-md-4 col-sm-6 bottommargin">
										<div class="promo promo-border promo-mini promo-center">										
										<h3><span>{{$arquivo->nome}}</span></h3>
											<h3>Baixar na versão {{$arquivo->tipo}}</h3>
											<a href="{{ assetsCliente($arquivo->arquivo) }}" target="blank" class="button button-large button-dark button-rounded">Baixe agora</a>
										</div>
									</div>
									@endforeach
								</div>
							</div>

						</div>	

					</div>
				</div>
			</div>

		</section><!-- #content end -->
@endsection

@section('scripts')
        
@endsection