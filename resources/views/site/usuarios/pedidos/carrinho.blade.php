@extends('site._template')

@section('content')

<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/slider/swiper/sobre.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1 style="text-shadow: 2px 2px 4px #000000;">Minhas compras</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="table-responsive bottommargin">

						<table class="table cart">
							<thead>
								<tr>
									<th class="cart-product-remove">&nbsp;</th>
									<th class="cart-product-thumbnail">&nbsp;</th>
									<th class="cart-product-name">Produto</th>
									<th class="cart-product-price">Preço Unitário</th>
									<th class="cart-product-quantity">Quantidade</th>
									<th class="cart-product-subtotal">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="cart_item">
									<td class="cart-product-remove">
										<a href="/produto/sexagem" class="remove" title="Remover Item"><i class="icon-trash2"></i></a>
									</td>

									<td class="cart-product-thumbnail">
										<a href="/produto/sexagem"><img width="64" height="64" src="{{ assetsCliente('images/shop/caes/caes_1.jpg') }}" alt="Produtos"></a>
									</td>

									<td class="cart-product-name">
										<a href="/produto/sexagem">Adenovirus canino Tipo 2</a>
									</td>

									<td class="cart-product-price">
										<span class="amount">R$ 55,00</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="text" name="quantity" value="1" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">R$ 55,00</span>
									</td>
								</tr>
								<tr class="cart_item">
									<td class="cart-product-remove">
										<a href="/categorias/aves" class="remove" title="Remover Item"><i class="icon-trash2"></i></a>
									</td>

									<td class="cart-product-thumbnail">
										<a href="/categorias/aves"><img width="64" height="64" src="{{ assetsCliente('images/shop/gatos/gatos_1.jpg') }}" alt="Produtos"></a>
									</td>

									<td class="cart-product-name">
										<a href="/categorias/aves">PKD Felino – Doença do Rim Policístico</a>
									</td>

									<td class="cart-product-price">
										<span class="amount">R$ 85,00</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="text" name="quantity" value="2" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">R$ 170,00</span>
									</td>
								</tr>
								
							</tbody>

						</table>

					</div>


					<div class="row clearfix">
						<div class="col-md-6 clearfix">
							<h3>Cálculo do Frete</h3>
							<div class="col_full">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus justo molestie nunc molestie auctor. Proin nec urna id ligula congue ultricies. Sed bibendum, mauris et porta pharetra, ante augue dignissim lorem, feugiat rutrum dolor libero porttitor urna. Etiam in ligula placerat, posuere eros sed, pharetra orci. Integer maximus blandit massa at lacinia. Fusce et scelerisque est. Suspendisse diam arcu, varius vitae justo vel, volutpat mollis nisi. Curabitur efficitur euismod mauris, hendrerit placerat ex fermentum ut. Duis suscipit porta diam. Nam iaculis augue ut commodo tempor.</p>
							</div>
						</div>

						<div class="col-md-6 clearfix">
							<div class="table-responsive">
								<h3>Subtotal da Compra</h3>

								<table class="table cart">
									<tbody>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Valor dos Exames</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">R$ 225,00</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Frete</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">PagSeguro</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Subtotal</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount color lead"><strong>R$ 225,00</strong></span>
											</td>
										</tr>
										<tr class="cart_item">
											<td colspan="6">
												<div class="row clearfix">
													
													<div class="col-md-12 col-xs-12 nopadding">
														
														<a href="https://pagseguro.uol.com.br/para-sua-vida/disputa" class="button button-border button-rounded button-green"><i class="icon-shopping-cart"></i>Finalizar compra</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>

								</table>

							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->


@endsection

@section('scripts')

@endsection