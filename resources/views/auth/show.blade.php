@extends('site._template')

@section('content')
<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/slider/swiper/sobre.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1 style="text-shadow: 2px 2px 4px #000000;">Meu Cadastro</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

						<div class="tab-container">

							<div class="tab-content clearfix" id="tab-login">
								<div class="panel panel-default nobottommargin">
									<div class="panel-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

											<h3>Esqueceu a senha?</h3>
											<p>Digite o seu e-mail no campo a baixo para recuperar.</p>

											<div class="col_full">
												<label for="template-contactform-email">E-mail <small>*</small></label>
												<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
											</div>

											<div class="col_full nobottommargin">
												<a href="#" class="button button-border button-rounded button-green nomargin" id="login-form-submit" name="login-form-submit" value="login">Enviar</a>
											</div>

										</form>
									</div>
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