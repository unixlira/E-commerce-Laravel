@extends('site._template')

@section('content')

    <section id="slider" class="slider-parallax swiper_wrapper clearfix">
            <div class="slider-parallax-inner">
                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        @foreach($slides as $slide)
                        <div class="swiper-slide dark" style="background-image: url('{{ assetsCliente($slide->imagem) }}');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp" style="text-shadow: 2px 2px 4px #000000;">{{ $slide->nome }}</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200" style="text-shadow: 2px 2px 4px #000000;">{{ $slide->subtitulo }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
                </div>
            </div>
        </section>

        <section id="content">
            <div class="content-wrap">
                <div class="promo promo-dark promo-full promo-flat header-stick notopborder ">
                    <div class="container clearfix">
                        <h3 style="padding-bottom: 20px; text-transform: uppercase;"><a href="http://vetdna.dyndns-server.com:8080/ConcentWeb/servlet/hlab8210?1,1" target="_blank">Acesse aqui: Cadastro, Resultados dos Exames e Pedidos de Kits.</a></h3>
                        <h3>Contato: <span>(14) 4102-0558 | E-mail: contato@vetdna.com.br</span></h3>
                        <h3>Horário de atendimento: 8h às 17h30min</h3>
                        <span>Rua La Salle, 290 | Vila Nova Botucatu | Botucatu - SP | CEP: 18.608-240</span>
                        <div class="mobi_button">
                            <a href="http://vetdna.dyndns-server.com:8080/ConcentWeb/servlet/hlab8210?1,1" target="_blank" class="button button-light button-large button-border button-rounded"><i class="icon-arrow-right"></i>&nbsp Acesse</a>
                        </div>
                    </div>
                </div>

                
                <div class="container clearfix">
                    <div class="col_md_12">

                        @foreach($categorias as $categoria)
                        <div class="col-md-4 topmargin">
                            <div class="feature-box center media-box fbox-bg">
                                <div class="fbox-media">
                                    <a href="{{ url(sprintf('categorias/%s', $categoria->slug)) }}"><img class="image_fade" src="{{ assetsCliente($categoria->imagem) }}" alt="{{$categoria->nome}}" title="{{$categoria->nome}}"></a>
                                </div>
                                <div class="fbox-desc">
                                    <h3 class="bottommargin-sm">{{$categoria->subtitulo}}
                                    <!--<span class="subtitle bottommargin-sm">Duis dapibus quam vitae tortor sodales, lacinia consectetur est pretium.</span>-->
                                    </h3>
                                    <a href="{{ url(sprintf('categorias/%s', $categoria->slug)) }}" class="button button-small button-border button-rounded button-green">Consulte</a>
                                </div>
                            </div>
                        </div>
                        @endforeach                
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="promo parallax promo-dark promo-flat promo-full bottommargin" style="background-image: url('{{ assetsCliente('images/paralax.jpg') }}');" data-stellar-background-ratio="0.5">
                <div class="container clearfix">
                    <h3 style="text-shadow: 2px 2px 4px #000000; text-transform: uppercase; padding: 20px 0 0 0;"> Faça o Download da tabela geral de exames</h3>
                    <span style="text-shadow: 2px 2px 4px #000000; padding: 0 0 20px 0;">Morbi vulputate efficitur cursus. Nullam ultricies molestie ante, sed aliquam risus cursus non.</span>
                    <a href="/site/vetdna/uploads/lista-de-exames/lista_exames.pdf" target="blank" class="button button-light button-large button-border button-rounded"><i class="icon-download"></i>&nbsp; Tabela de Exames</a>
                </div>
            </div>

            <div class="container clearfix">
                <div class="col_full">
                    <div class="heading-block center" style="margin-top: 33px;">
                        <h2>Perguntas Frequentes</h2>
                    </div>
                    <div class="accordion clearfix">
                        <div class="col_half nobottommargin">
                         @foreach($faqs as $faq)   
                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>{{$faq->pergunta}}</div>
                            <div class="acc_content clearfix">{{$faq->resposta}}.</div>
                        @endforeach                            
                    </div>
                </div>
            </div>

            <div class="fancy-title title-double-border title-center">
                <h3 class="uppercase">Clientes</h3>
            </div>
            <div class="container clearfix">
                <div class="col_full nobottommargin">
                    <div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6" style="padding: 20px 0;">
                        @foreach($parceiros as $parceiro)
                        <div class="oc-item">
                            <a href="{{ $parceiro->link }}" target="_blank"><img src="{{ assetsCliente($parceiro->imagem) }}" alt="{{ $parceiro->nome }}" title="{{ $parceiro->nome }}"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

@endsection

@section('scripts')

@endsection
