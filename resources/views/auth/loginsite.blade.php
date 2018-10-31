@extends('site._template')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/slider/swiper/sobre.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">


			<div class="container clearfix">
				<h1 style="text-shadow: 2px 2px 4px #000000;">Cadastro</h1>
			</div>

		</section><!-- #page-title end -->

<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					@include('shared.alerts')

					<div class="col_one_third nobottommargin">

						<div class="well well-lg nobottommargin">
							<form id="login-form" name="login-form" class="nobottommargin" action="{{ url('usuario/login') }}" method="post">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<h3>Login para a sua conta</h3>

								<div class="col_full">
									<label for="loginemail">E-mail:</label>
									<input type="email" id="loginemail" name="email" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="loginpassword">Senha:</label>
									<input type="password" id="loginpassword" name="password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button button-border button-rounded button-aqua nomargin" id="login-register-form-submit" name="register-form-submit" value="register">Entrar</button>
									<a href="/usuario/esqueceu-senha" class="fright" style="margin-top: 10px;">Esqueci a senha.</a>
								</div>

							</form>
						</div>

					</div>

					<div class="col_two_third col_last nobottommargin">


						<h3>Ainda não tem uma conta na VetDNA? Cadastre-se agora.</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

						<form id="register-form" name="register-form" class="nobottommargin" action="{{ url('usuario/cadastro') }}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="col_half">
										<label for="name">Nome completo:</label>
										<input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" required />
									</div>

									<div class="col_half col_last">
										<label for="email">E-mail:</label>
										<input type="email" id="email" name="email" value="{{old('email')}}" class="form-control"required old/>
									</div>

									<div class="clear"></div>

										<div class="col_half">
											<label for="rg">RG:</label>
											<input type="text" id="rg" name="rg" value="{{old('rg')}}" class="form-control"required old/>
										</div>

										<div class="col_half col_last">
											<label for="cpf">CPF:</label>
											<input type="text" id="cpf" name="cpf" value="{{old('cpf')}}" class="form-control" required old/>
										</div>

									<div class="clear"></div>

										<div class="col_half">
											<label for="endereco">Endereço:</label>
											<input type="text" id="endereco" name="endereco" value="{{old('endereco')}}" class="form-control" required old/>
                                        </div>
                                        
										<div class="col_one_sixth offset">
											<label for="numero">Número:</label>
											<input type="text" id="numero" name="numero" value="{{old('numero')}}" class="form-control" required old/>
                                        </div>
                                        
                                        <div class="col_one_third col_last">
											<label for="complemento">Complemento:</label>
											<input type="text" id="complemento" name="complemento" value="{{old('complemento')}}" class="form-control" old/>
                                        </div>

                                        <div class="clear"></div>

										<div class="col_half ">
											<label for="cidade">Cidade:</label>
											<input type="text" id="cidade" name="cidade" value="{{old('cidade')}}" class="form-control" required old/>
                                        </div>
                                        
                                        <div class="col_half col_last">
											<label for="estado">Estado:</label>
											<input type="text" id="estado" name="estado" value="{{old('estado')}}" class="form-control" required old/>
										</div>

									<div class="clear"></div>										

										<div class="col_half ">
											<label for="cep">CEP:</label>
											<input type="text" id="cep" name="cep" value="{{old('cep')}}" class="form-control" required />
										</div>							

										<div class="col_half col_last">
											<label for="phone">DDD + Telefone:</label>
											<input type="text" id="phone" name="phone" value="{{old('phone')}}" class="form-control" required/>
										</div>

									<div class="clear"></div>

										<div class="col_half">
											<label for="password">Escolha uma senha:</label>
											<input type="password" id="password" name="senha" value="" class="form-control" required/>
											
										</div>

										<div class="col_half col_last">
											<label for="repassword">Confirme a sua senha:</label>
											<input type="password" id="repassword" name="senha_confirmation" value="" class="form-control" required/>
											
										</div>

									<div class="clear"></div>

									<div class="col_full nobottommargin">
										<button class="button button button-border button-rounded button-green nomargin" id="register-form-submit" name="submit" value="register">Salvar</button>
									</div>

								</form>

					</div>

				</div>

			</div>

		</section><!-- #content end -->
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
	$('#cpf').inputmask("999.999.999-99"); 
	$('#phone').inputmask('(99) 99999999[9]');
});
</script>
@endsection