<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="VDTA Comunicação Integrada" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="{{ assetsCliente('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/colors.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VetDNA Diagnósticos Moleculares</title>
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <div id="logo">
                        <a href="{{ url("/") }}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ assetsCliente('images/logo.png') }}" alt="Logo"></a>
                        <a href="{{ url("/") }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ assetsCliente('images/logo@2x.png') }}" alt="Logo"></a>
                    </div>
                    <div id="top-account" class="dropdown" style="margin-left: 30px;">
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i><i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            @if(isset(Auth::user()->id))
                                <li><a href="#">{{ Auth::user()->name }}</a></li>
                                <li><a href="{{url('/usuario/meu-cadastro')}}">Meu Cadastro</a></li>
                                <li><a href="{{url('/usuario/pedidos')}}">Meus Pedidos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('/usuario/sair')}}">Sair <i class="icon-signout"></i></a></li>
                            @else
                            <li><a href="{{url('/usuario/login')}}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                    <nav id="primary-menu">
                        <ul>
                            <li {!! Request::is('/')? 'class="current"' : null !!}><a href="{{ url("/") }}"><div>Home</div></a></li>
                            <li {!! Request::is('sobre')? 'class="current"' : null !!}><a href="{{ url('sobre') }}"><div>Sobre nós</div></a></li>
                            <li {!! Request::is('categorias/*') ? 'class="current"' : null !!}><a href="#"><div>Exames</div></a>
                                <ul>
                                    @foreach(session('site')['categorias'] as $categoria)
                                    <li><a href="{{ url(sprintf('categorias/%s', $categoria->slug)) }}"><div>{{$categoria->nome}}</div></a></li>
                                    @endforeach
                                </ul>
                            </li>
                          
                            <li {!! Request::is('contato')? 'class="current"' : null !!}><a href="{{ url('contato') }}"><div>Contato</div></a></li>
                            <li><a href="http://vetdna.dyndns-server.com:8080/ConcentWeb/servlet/hlab8210?1,1" target="_blank"><div>Resultados dos Exames</div></a></li>
                        </ul>
                        <div id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>3</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Meu carrinho</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="/usuario/carrinho"><img src="{{ assetsCliente('images/shop/caes/caes_1.jpg') }}" alt="produtos" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="/usuario/carrinho">Adenovirus canino Tipo 2</a>
                                            <span class="top-cart-item-price">R$ 55,00</span>
                                            <span class="top-cart-item-quantity">x 1</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="/usuario/carrinho"><img src="{{ assetsCliente('images/shop/gatos/gatos_1.jpg') }}" alt="produtos" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="/usuario/carrinho">PKD Felino – Doença do Rim Policístico</a>
                                            <span class="top-cart-item-price">R$ 85,00</span>
                                            <span class="top-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price" >R$ 225,00</span>
                                    <a href="/usuario/carrinho"><button class="button button-3d button-small nomargin fright" >Ver</button></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')

        <footer id="footer" class="dark">
            <div class="container">
                <div class="footer-widgets-wrap clearfix">
                    <div class="col_two_third">
                        <div class="col_one_third">
                            <div class="widget clearfix">
                                <h2>Endereço</h2>
                                <address>
                                <strong style="font-size: 20px;">{{session('site')['rua']}}, {{session('site')['numero']}}</strong><br>
                                {{session('site')['bairro']}}<br>
                                {{session('site')['cidade']}}/{{session('site')['uf']}}<br>CEP: {{session('site')['cep']}}<br>
                                </address>
                                <?php
                                    $linhas = explode("\n", session('site')['telefone']);
                                ?>
                                @foreach($linhas as $linha)
                                    <?php $tipo = explode(":", $linha); ?>
                                    <abbr title="Telefone {{ $tipo[0] }}"><strong>{{ $tipo[0] }}:</strong></abbr> {{ $tipo[1] }}<br>

                                @endforeach
                                <abbr title="E-mail"><strong>Email: </strong></abbr><a href="mailto:{{session('site')['email']}} ">{{session('site')['email']}}</a>             
                            </div>
                        </div>
                        <div class="col_one_third">
                            <div class="widget widget_links clearfix">
                                <h2>Exames</h2>
                                <ul>
                                     @foreach(session('site')['categorias'] as $categoria)
                                        <li>
                                            <a href="{{ url(sprintf('categorias/%s', $categoria->slug)) }}">
                                                <div>{{$categoria->nome}}</div>
                                            </a>
                                        </li>                                   
                                    @endforeach                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_third col_last">
                            <div class="widget widget_links clearfix">
                                <h2>Comercial</h2>
                                <ul>
                                    <li><a href="/usuario/login">Login</a></li>
                                    <li><a href="/usuario/meu-cadastro">Meu cadastro</a></li>
                                    <li><a href="/usuario/pedidos">Meus pedidos</a></li>
                                    <li><a href="/politicas-da-empresa">Políticas da empresa</a></li>
                                    <li><a href="/como-comprar">Como comprar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="widget subscribe-widget clearfix">
                            <h5><strong>Receba as</strong> nossas novidades:</h5>
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form" action="{{ url('newsletter') }}" role="form" method="post" class="nobottommargin">
                                {{csrf_field()}} 
                                <div class="input-group divcenter" >
                                    <span class="input-group-addon" style="background-color: #fff;"><i class="icon-email2"></i></span>
                                    <input type="email" id="newsletteremail" name="email" class="form-control required email" placeholder="Seu E-mail" style="background-color: #fff;">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Enviar</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="widget clearfix" style="margin-bottom: -20px;">
                            <div class="row">
                                <div class="col-md-6 clearfix bottommargin-sm">
                                    <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Curta</strong><br>no Facebook</small></a>
                                </div>
                                <div class="col-md-6 clearfix">
                                    <img src="{{ assetsCliente('images/pagseguro.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        Copyrights &copy; 2018 - VetDNA Diagnósticos Moleculares, todos os direitos reservados.<br>
                        <div class="copyright-links"><a href="http://vdta.com.br/" target="_blank;">Desenvolvido por: VDTA Comunicação Integrada</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <script type="text/javascript" src="{{ assetsCliente('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ assetsCliente('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ assetsCliente('js/functions.js') }}"></script>
    <script type="text/javascript" src="{{ assetsCliente('js/plugins/jquery.inputmask.bundle.js') }}"></script>

    @yield('scripts')

</body>
</html>
