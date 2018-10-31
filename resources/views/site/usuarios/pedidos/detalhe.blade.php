@extends('site._template')

@section('content')


	<!-- Page Title
	============================================= -->
	<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/slider/swiper/sobre.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">


		<div class="container clearfix">
			<h1 style="text-shadow: 2px 2px 4px #000000;">Meus Pedidos</h1>
		</div>

	</section><!-- #page-title end -->

	<!-- Content
	============================================= -->
	<section id="content">
		<div class="content-wrap">
			<div class="container clearfix">						
				<div class="col-md-12">
					<div class="table-responsive clearfix">									
						<h3>Pedido:&nbsp	Nº {{ $pedido->numero }} - &nbsp{{ $pedido->created_at->format('d/m/Y - H:i') }} - <a style="color: {{ $pedido->status->cor }}";>{{ $pedido->status->nome }}</a>				
						</h3>
						<table class="table cart">
							<thead>
								<tr>
									<th class="cart-product-thumbnail">&nbsp;</th>									
									<th class="cart-product-name">Produto</th>
									<th class="cart-product-preco">Preço</th>
									<th class="cart-product-quantity">Quantidade</th>
									<th class="cart-product-subtotal">Total</th>
								</tr>
							</thead>
							<tbody>
								@foreach($pedido->produtos as $registro)
								
								<tr class="cart_item">
									<td class="cart-product-thumbnail">
									<a href="/{{$registro->produto->categoria->slug}}/{{$registro->produto->slug}}"><img width="64" height="64" src="{{ assetsCliente( $registro->produto->imagem) }}" alt="Produto"></a>
									</td>							
									

									<td class="cart-product-name">
										<a href="/{{$registro->produto->categoria->slug}}/{{$registro->produto->slug}}">{{ $registro->produto->nome }}</a>
									</td>

									<td class="cart-product-preco">
										<span>R$ {{ valor($registro->preco_unitario, 2) }}</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity clearfix">
											{{$registro->quantidade}}
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">R$ {{ valor($pedido->total, 2) }}</span>
									</td>
								</tr>

								@endforeach												
							</tbody>
						</table>						
					</div>								
				</div>

				<div class="row clearfix">
					<div class="col-md-6 clearfix">
						<h3>Dados de Entrega</h3>
						<div class="col_full">
							<ul style="list-style: none; font-size: 16px;">
								<li><strong>Nome:</strong> {{ $pedido->usuario->name }}</li>
								<li><strong>Endereço:</strong> {{ $pedido->endereco_rua }}, {{ $pedido->endereco_numero }}</li>
								<li><strong>Bairro:</strong> {{ $pedido->endereco_bairro }}
								<li><strong>Cidade:</strong> {{ $pedido->cidade }}-{{ $pedido->uf }}</li>
								<li><strong>CEP:</strong> {{ $pedido->cep }}</li>
							</ul>
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
												<span class="amount">{{ valor($pedido->total, 2) }}</span>
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
												<span class="amount color lead"><strong>{{ valor($pedido->total, 2) }}</strong></span>
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