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
							<li class="current"><a href="/categorias/{{$categoria->slug}}"><div>Lista de exames</div></a></li>
							<li class=""><a href="/categorias/{{$categoria->slug}}/manuais"><div>Manual de coleta</div></a></li>
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
								<h2>Lista de Exames</h2>
							</div>
							@forelse($categoria->categorias as $subcategoria)
							<h2><span>{{ $subcategoria->nome }}</span></h2>
							<div class="accordion accordion-bg clearfix bottommargin">
								@foreach($subcategoria->produtos as $produto)
								<div class="acctitle">
									<i class="acc-closed icon-ok-circle"></i>
									<i class="acc-open icon-remove-circle"></i>
									{{$produto->nome}}&nbsp 
									<span class="subtitle-accordion">{{$produto->subtitulo}}</span>	
								</div>
								<div class="acc_content clearfix">
									<p class="nobottommargin">
										Cód: {{$produto->codigo}}<br>
										Preço: R$ {{valor($produto->preco, 2)}} (cada)<br>
										Prazo: {{$produto->prazo}}<br>
										Tipos de amostra:  {{$produto->tipos_de_amostra}}
									</p>
								<a href="/{{$categoria->slug}}/{{$produto->slug}}?sub={{$subcategoria->slug}}" class="button button-small button-border button-rounded button-green shop_button"><i class="icon-shopping-cart"></i>Comprar</a>
								</div>
								@endforeach
							</div>
							@if(trim($subcategoria->arquivo)!="")
							<div class="promo promo-dark promo-flat topmargin-sm bottommargin">
								<h3 style="text-transform: uppercase;">Baixe a nossa lista de {{ $categoria->nome }}</h3>
								<div class="mobi_button">
									<a href="{{ assetsCliente( $subcategoria->arquivo) }}" target="blank" class="button button-light button-large button-border button-rounded mobi_button"><i class="icon-download"></i>&nbsp Baixar agora</a>
								</div>
							</div>
							@endif
							@empty
							<div class="accordion accordion-bg clearfix bottommargin">
								@foreach($categoria->produtos as $produto)
								<div class="acctitle">
									<i class="acc-closed icon-ok-circle"></i>
									<i class="acc-open icon-remove-circle"></i>
									{{$produto->nome}}&nbsp 
									<span class="subtitle-accordion">{{$produto->subtitulo}}</span>	
								</div>
								<div class="acc_content clearfix">
									<p class="nobottommargin">
										Cód: {{$produto->codigo}}<br>
										Preço: R$ {{valor($produto->preco, 2)}} (cada)<br>
										Prazo: {{$produto->prazo}}<br>
										Tipos de amostra:  {{$produto->tipos_de_amostra}}
									</p>
								<a href="/{{$categoria->slug}}/{{$produto->slug}}" class="button button-small button-border button-rounded button-green shop_button"><i class="icon-shopping-cart"></i>Comprar</a>
								</div>
								@endforeach
							</div>
							@endforelse
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection

@section('scripts')
        
@endsection