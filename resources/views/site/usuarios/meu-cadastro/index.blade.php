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

					<div class="row clearfix">

						<div class="col-sm-12">
							@include('shared.alerts')
							<!--<img src="images/icons/avatar.jpg" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">-->
							

							<h3 class="nomecliente">{{ Auth::user()->name }}</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

								<form id="register-form" name="register-form" class="nobottommargin" action="{{ url('usuario/meu-cadastro') }}" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="col_half">
										<label for="register-form-name">Nome completo:</label>
										<input type="text" id="register-form-name" name="name" value="{{ Auth::user()->name }}" class="form-control" />
									</div>

									<div class="col_half col_last">
										<label for="register-form-email">E-mail:</label>
										<input type="text" id="register-form-email" name="email" value="{{ Auth::user()->email ,old('name')}}" class="form-control" />
									</div>

									<div class="clear"></div>

										<div class="col_half">
											<label for="register-form-name">RG:</label>
											<input type="text" id="register-form-name" name="rg" value="{{ Auth::user()->rg }}" class="form-control" />
										</div>

										<div class="col_half col_last">
											<label for="cpf">CPF:</label>
											<input type="text" id="cpf" name="cpf" value="{{ Auth::user()->cpf }}" class="form-control" />
										</div>

									<div class="clear"></div>

										<div class="col_half">
											<label for="register-form-name">Endereço:</label>
											<input type="text" id="register-form-name" name="endereco" value="{{ Auth::user()->endereco }}" class="form-control" />
                                        </div>
                                        
										<div class="col_one_sixth offset">
											<label for="register-form-name">Número:</label>
											<input type="text" id="register-form-name" name="numero" value="{{ Auth::user()->numero }}" class="form-control" />
                                        </div>
                                        
                                        <div class="col_one_third col_last">
											<label for="register-form-name">Complemento:</label>
											<input type="text" id="register-form-name" name="complemento" value="{{ Auth::user()->complemento }}" class="form-control" />
                                        </div>

                                        <div class="clear"></div>

										<div class="col_half ">
											<label for="register-form-name">Cidade:</label>
											<input type="text" id="register-form-name" name="cidade" value="{{ Auth::user()->cidade }}" class="form-control" />
                                        </div>
                                        
                                        <div class="col_half col_last">
											<label for="register-form-name">Estado:</label>
											<input type="text" id="register-form-name" name="estado" value="{{ Auth::user()->estado }}" class="form-control" />
										</div>

									<div class="clear"></div>

										

										<div class="col_half ">
											<label for="register-form-name">CEP:</label>
											<input type="text" id="register-form-name" name="cep" value="{{ Auth::user()->cep }}" class="form-control" />
										</div>

									

										

										<div class="col_half col_last">
											<label for="telefone">DDD + Telefone:</label>
											<input type="text" id="telefone" name="telefone" value="{{ Auth::user()->telefone }}" class="form-control" />
										</div>

									<div class="clear"></div>

										<div class="col_half">
											<label for="password">Escolha uma senha:</label>
											<input type="password" id="password" name="senha" value="" class="form-control" />
										</div>

										<div class="col_half col_last">
											<label for="repassword">Confirme a sua senha:</label>
											<input type="password" id="repassword" name="senha_confirmation" value="" class="form-control" />
										</div>

									<div class="clear"></div>

									<div class="col_full nobottommargin">
										<button class="button button button-border button-rounded button-green nomargin" id="register-form-submit" name="submit" value="register">Salvar</button>
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
<script type="text/javascript">
$(document).ready(function(){
	$('#cpf').inputmask("999.999.999-99"); 
	$('#telefone').inputmask('(99) 99999999[9]');
});
</script>
@endsection