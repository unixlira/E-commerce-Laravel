<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="VDTA Comunicação Integrada" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:800" rel="stylesheet">
    <link rel="stylesheet" href="{{ assetsCliente('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/responsive.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('css/colors.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ assetsCliente('style.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Painel de Controle - {{ session('site')->nome_fantasia }}</title>
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <header id="header" class="sticky-style-2">
            <div class="container clearfix">
                <div id="logo" class="divcenter">
                    <a href="/" class="standard-logo" data-dark-logo="images/logo-dark.png"><img class="divcenter" src="{{ assetsCliente('images/logo.png') }}" title="{{ session('site')->nome_fantasia }}" alt="{{ session('site')->nome_fantasia }}"></a>
                    <a href="/" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img class="divcenter" src="{{ assetsCliente('images/logo@2x.png') }}" title="{{ session('site')->nome_fantasia }}" alt="{{ session('site')->nome_fantasia }}"></a>
                </div>
            </div>
        </header>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div id="login" class="animate form col-md-4 col-md-offset-4">
                        @include('shared.alerts')
                        <section class="login_content">
                            <form method="POST" action="{{ url('admin/login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h1>Controle de Acesso</h1>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" required="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Senha" required="" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default submit">Entrar</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="notopborder">
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col-md-12 copyrights-color copyrights-position">
                        {{ session('site')->nome_fantasia }} &copy; {{ date("Y") }}, todos os direitos reservados &nbsp | &nbsp Desenvolvido por: <a href="http://vdta.com.br/" target="_blank">&nbsp VDTA Comunicação Integrada</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <script type="text/javascript" src="{{ assetsCliente('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ assetsCliente('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ assetsCliente('js/functions.js') }}"></script>
    @yield('scripts')
</body>
</html>