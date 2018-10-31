@extends('site._template')

@section('content')

<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente($produto->categoria->imagem_destaque)}}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1 style="text-shadow: 2px 2px 4px #000000;">Exames</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">
						<div class="col-md-12">
							<div class="heading-block center">
								
								<h2>{{$produto->categoria->nome}}</h2>
								
							</div>
						</div>
					</div>

					<div class="postcontent nobottommargin clearfix">

						<div class="single-product">

							<div class="product">

								<div class="col_half">

									<!-- Product Single - Gallery
									============================================= -->
									<div class="product-image">
										<img src="{{ assetsCliente($produto->imagem) }}" alt="produto">
									</div><!-- Product Single - Gallery End -->

								</div>

								<div class="col_half col_last product-desc">

									<!-- Product Single - Price
									============================================= -->
									<h3>{{ $produto->nome }}</h3>
									<div class="product-price"><ins>R$  {{valor($produto->preco, 2)}} (cada)</ins></div><!-- Product Single - Price End -->
									
									<div class="clear"></div>
									<div class="line"></div>

									<!-- Product Single - Quantity & Cart Button
									============================================= -->
									<form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus" onclick="subtracao('quantidade');">
											<input type="text" step="1" min="1" id="quantidade" name="quantidade" value="1" title="Qty" class="qty" size="4" />
											<input type="button" value="+" class="plus" onclick="adicao('quantidade');">
										</div>

										<div class="buy_button">
											<a href="/usuario/carrinho" type="submit" class="button button-border button-rounded button-green button-small nomargin"><i class="icon-shopping-cart"></i>Comprar</a>
										</div>
									</form><!-- Product Single - Quantity & Cart Button End -->

									<div class="clear"></div>
									<div class="line"></div>

								
									<p>{{$produto->descricao}}</p>
										<ul class="iconlist">
											<!--<li><i class="icon-caret-right"></i> Código: 01A</li>-->
											<li><i class="icon-caret-right"></i> Preço: R$ {{valor($produto->preco, 2)}} (cada)</li>
											<li><i class="icon-caret-right"></i> Prazo: {{$produto->prazo}}</li>
											<li><i class="icon-caret-right"></i> Tipos de amostra: {{$produto->tipos_de_amostra}}</li>
										</ul><!-- Product Single - Short Description End -->

									<a href="/categorias/aves" class="button button-mini  button-border button-rounded button-aqua" style="margin-top: 15px;">Lista de exames</a>

								</div>

							</div>

						</div>

					</div>

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget_links clearfix">

								<div class="bottommargin">
									<div class="promo promo-border promo-mini">
										<h3>Endereço:<br>
										<span style="font-size: 16px;">Rua La Salle, 290<br>
										Vila Nova Botucatu <br>
										Botucatu - SP<br>
										CEP: 18.608-240</span></h3>
									</div>
								</div>

								<div class="bottommargin">
									<div class="promo promo-border promo-mini">
										<h3>Telefones:<br>
										<span style="font-size: 16px;">Fixo: (14) 4102-0558</span><br>
										<span style="font-size: 16px;">Vivo: (14) 99775-2220</span><br>
										<span style="font-size: 16px;">Tim: (14) 98132-0302</span><br>
										<span style="font-size: 16px;">Claro: (14) 99108-6465</span><br>
										<span style="font-size: 16px;">Oi: (14) 98805-5385</span><br>
										E-mail: <span style="font-size: 16px;">contato@vetdna.com.br</span></h3>
									</div>
								</div>

							</div>

						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->


@endsection

@section('scripts')

@endsection