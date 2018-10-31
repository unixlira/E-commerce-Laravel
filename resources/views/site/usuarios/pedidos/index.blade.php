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
								<h3>Meus Pedidos</h3>

								<table class="table cart">
									<thead>
										<tr>
											<th class="cart-product-name">Número do Pedido</th>
											<th class="cart-product-name">Pedido feito em</th>
											<th class="cart-product-quantity">Valor</th>
											<th class="cart-product-subtotal">Status</th>
										</tr>
									</thead>
									<tbody>
										@foreach( $pedidos as $pedido )
										<tr class="cart_item">
											
											<td class="cart-product-name">
											<a href="/usuario/pedidos/detalhe/{{$pedido->numero}}" style="font-size: 16px;">Nº {{ $pedido->numero }}</a>
											</td>

											<td class="cart-product-name">
												{{ $pedido->created_at->format('d / m / Y') }}
											</td>

											<td class="cart-product-subtotal">
											<span class="amount" >R$ {{ valor($pedido->total, 2) }}</span>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount" style="color: {{ $pedido->status->cor }}; font-weight: bold";> {{ $pedido->status->nome }} </span>
											</td>
											
											
										</tr>
										@endforeach
									</tbody>

								</table>

							</div>
						</div>
						
					 <div class="col-md-offset-5">{!! $pedidos->render() !!}</div>
				</div>

			</div>

		</section><!-- #content end -->


@endsection
