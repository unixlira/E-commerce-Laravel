@extends('site._template')

@section('content')
<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/slider/swiper/sobre.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1 style="text-shadow: 2px 2px 4px #000000;">Como Comprar</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">
						<div class="col-md-12">
							
							<h3><span>Criando um login na VetDNA</span></h3>
							
							<ul class="iconlist iconlist-color politic-list">
								<li><i class="icon-plus-sign"></i>No momento da compra irá abrir uma janela: Faça seu pedido ou cadastre-se;</li>
								<li><i class="icon-plus-sign"></i>Será aberta uma página para Criar uma Conta, clique no campo Ainda não sou Cliente, no botão Eu quero me cadastrar;</li>
								<li><i class="icon-plus-sign"></i>Você será redirecionado para a página Cadastro e deverá preencher corretamente todos os campos de Quero ser Cliente. </li>
							</ul>

							<h3><span>Efetuando login nas próximas compras </span></h3>
							
							<ul class="iconlist iconlist-color politic-list">
								<li><i class="icon-plus-sign"></i>Na página principal da, clique no link do canto superior central, Faça seu pedido ou cadastre-se;</li>
								<li><i class="icon-plus-sign"></i>Digite o seu endereço de e-mail e senha já cadastrados previamente nos campos necessários;</li>
								<li><i class="icon-plus-sign"></i>Você será redirecionado para a homepage da VetDNA, e assim poderá efetuar sua compra. </li>
							</ul>

							<h3><span>Como comprar na VetDNA </span></h3>
							
							<ul class="iconlist iconlist-color politic-list">
								<li><i class="icon-plus-sign"></i>Ao efetuar o login, você poderá escolher o(s) exame(s) para fazer o seu pedido. Poderá navegar por categorias através do submenu do link Exames;</li>
								<li><i class="icon-plus-sign"></i>Ao escolher o produto desejado, clique em Comprar para ser direcionado para a página do respectivo exame e ver suas informações;</li>
								<li><i class="icon-plus-sign"></i>Clique no link Comprar para colocar esse exame em seu carrinho;</li>
								<li><i class="icon-plus-sign"></i>Será aberta uma página referente ao seu Carrinho de Compras, onde estarão listados todos os itens que você já escolheu para fazer o pedido.</li>
							</ul>

							<p>Caso você queira comprar outro(s) exames(s), clique em Continuar Comprando, e será redirecionado para a homepage do site. Se todos os itens que deseja já estiver em seu carrinho, clique em Finalizar Compra.</p>

							<h3><span>Como finalizar seu pedido na primeira compra</span></h3>
							
							<ul class="iconlist iconlist-color politic-list">
								<li><i class="icon-plus-sign"></i>Ao clicar em Finalizar Compra, você será direcionado para as etapas de conclusão do seu pedido;</li>
								<li><i class="icon-plus-sign"></i>Aparecerá uma tela para serem preenchidas as Informações de Cobrança (etapa 1), tais como nome completo do titular e endereço para cobrança. Depois deve-se clicar em Continuar;</li>
								<li><i class="icon-plus-sign"></i>Você será encaminhado diretamente para a etapa que informa o método de envio e o valor do frete. Ao escolher as opções desejadas, clicar em Continuar;</li>
								<li><i class="icon-plus-sign"></i>O próximo passo é informar a opção de pagamento desejada. Nesse caso deve-se ter muita atenção, pois você será encaminhado para o PagSeguro apenas depois de confirmar o pedido no próximo passo. Clique no botão Continuar;</li>
								<li><i class="icon-plus-sign"></i>Nessa etapa, confirme se todos os produtos do pedido estão corretos e clique em Confirmar Pedido. Você será direcionado para o PagSeguro;</li>
								<li><i class="icon-plus-sign"></i>Aparecerá uma página para identificação. Nesse caso deve-se colocar o nome completo do titular, o e-mail, e clicar em Continuar;</li>
								<li><i class="icon-plus-sign"></i>Abrirá uma página com as Formas de Pagamento:</li>
									<ul class="iconlist iconlist-color nobottommargin">
										<li><i class="icon-ok"></i><strong>Cartão de Crédito:</strong> Clique na bandeira correspondente ao seu cartão de crédito. Abaixo da página irá aparecer alguns campos que devem ser preenchidos, como nº do cartão, validade... Depois de todos os campos serem preenchidos corretamente, clique em Confirmar;</li>
										<li><i class="icon-ok"></i><strong>Débito Online:</strong> Clique no quadrado corresponde ao seu banco, e depois, em Confirmar. Você será direcionado ao site do seu banco para concluir o pedido com as informações da sua conta; </li>
										<li><i class="icon-ok"></i><strong>Boleto:</strong> Clique no quadrado onde está escrito Boleto. Aparecerá uma caixa na página com o valor correspondente ao seu pedido. Verifique se o valor está correto e clique em Gerar Boleto. Atenção: Será aberta uma nova janela com o boleto pronto para a impressão. </li>
									</ul>
							</ul>
							<p>Ao finalizar todas as etapas, você receberá um e-mail assim que seu pedido for aprovado. </p>

							<h3><span>Caso não seja a primeira compra</span></h3>

							<ul class="iconlist iconlist-color politic-list">
								<li><i class="icon-plus-sign"></i>Ao clicar em Finalizar Compra, você será direcionado para as etapas necessárias para a conclusão do seu pedido;</li>
								<li><i class="icon-plus-sign"></i>Aparecerá uma tela com as suas Informações de Cobrança, que já foram preenchidas anteriormente. Confira se as informações estão corretas e clique em Continuar;</li>
								<li><i class="icon-plus-sign"></i>Você será encaminhado diretamente para a etapa que informa o método de envio e o valor do frete. Ao escolher as opções desejadas, clicar em Continuar;</li>
								<li><i class="icon-plus-sign"></i>O próximo passo é informar a opção de pagamento desejada. Nesse caso deve-se ter muita atenção, pois você será encaminhado para o PagSeguro apenas depois de confirmar o pedido no próximo passo. Clique no botão Continuar;</li>
								<li><i class="icon-plus-sign"></i>Nessa etapa, confirme se todos os produtos do pedido estão corretos e clique em Confirmar Pedido. Você será direcionado para o PagSeguro</li>
								<li><i class="icon-plus-sign"></i>Irá aparecer uma página para identificação. Nesse caso deve-se colocar o nome completo do titular, o e-mail, e clicar em Continuar; </li>
								<li><i class="icon-plus-sign"></i>Irá abrir uma página com as Formas de Pagamento: </li>
									<ul class="iconlist iconlist-color nobottommargin">
										<li><i class="icon-ok"></i><strong>Cartão de Crédito:</strong> Clique na bandeira correspondente ao seu cartão de crédito. Abaixo da página irá aparecer alguns campos que devem ser preenchidos, como nº do cartão, validade... Depois de todos os campos serem preenchidos corretamente, clique em Confirmar;</li>
										<li><i class="icon-ok"></i><strong>Débito Online:</strong> Clique no quadrado corresponde ao seu banco, e depois, em Confirmar. Você será direcionado ao site do seu banco para concluir o pedido com as informações da sua conta; </li>
										<li><i class="icon-ok"></i><strong>Boleto:</strong> Clique no quadrado onde está escrito Boleto. Aparecerá uma caixa na página com o valor correspondente ao seu pedido. Verifique se o valor está correto e clique em Gerar Boleto. Atenção: Será aberta uma nova janela com o boleto pronto para a impressão. </li>
									</ul>
							</ul>

							<p><strong>Atenção:</strong> Em caso de compras de produtos para download, siga atentamente o passo-a-passo que se encontrará no e-mail recebido assim que o pedido for aprovado.</p>

							<h3><span>Não consegui finalizar todas as etapas</span></h3>

							<ul class="iconlist iconlist-color politic-list">
								<li><i class="icon-plus-sign"></i>Nesse caso, volte a página inicial da VetDNA; </li>
								<li><i class="icon-plus-sign"></i>Caso você ainda não tenha feito o logoff, basta clicar no ícone de "cesta de compras" em Meu carrinho, no canto superior direito da página, e passar por todas as etapas novamente;</li>
								<li><i class="icon-plus-sign"></i>Se você já efetuou o logoff, deve ir em Meus Pedidos, no canto superior direito da página; </li>
								<li><i class="icon-plus-sign"></i>Há uma lista com suas compras recentes. Escolha a compra que deseja concluir e clique em RECOMPRAR. Você será redirecionado para o ínicio das etapas já detalhadas acima (ver: Como finalizar seu pedido).</li>
							</ul>

						</div>	

					</div>
				</div>
			</div>

		</section><!-- #content end -->
@endsection

@section('scripts')
        
@endsection