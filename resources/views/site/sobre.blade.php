@extends('site._template')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/slider/swiper/sobre.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">
    <div class="container clearfix">
        <h1 style="text-shadow: 2px 2px 4px #000000;">Sobre Nós</h1>
    </div>
</section><!-- final da página de título -->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-6">
                    <p>{!! nl2br($sobre->texto_esquerda) !!}</p>
                </div>
                <div class="col-md-6">
                    <p>{!! nl2br($sobre->texto_direita) !!}</p>
                </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="bottommargin">
                        <img data-animate="" src="{{ assetsCliente($sobre->imagem) }}" alt="Laboratório Fachada">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-bg clearfix">
                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Missão</div>
                        <div class="acc_content clearfix">
                            {!! nl2br($sobre->missao) !!}
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Visão</div>
                        <div class="acc_content clearfix">
                            {!! nl2br($sobre->visao) !!}
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Qualidade</div>
                        <div class="acc_content clearfix">
                            {!! nl2br($sobre->valores) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fancy-title title-double-border title-center">
            <h3>Pesquisadores</span></h3>
        </div>
        
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-6">
                    <p>Este espaço é reservado aos pesquisadores de diversas áreas que queiram complementar suas pesquisas utilizando ferramentas da biologia molecular. Se o seu laboratório não possui os equipamentos, insumos ou treinamento necessários para o desenvolvimento e realização de diagnósticos moleculares venham desenvolver sua pesquisa conosco. </p>
                </div>
                <div class="col-md-6">
                    <p>A empresa VetDNA mantém profissionais capacitados para atender ás suas pesquisas. Oferecemos serviços para todas as etapas do processo, incluindo a padronização de métodos para extração de DNA, reações de PCR e sequenciamento, entre outros.</p>
                </div>
                <div class="col-md-12 center"> 
                    <p>Temos ótimos preços e utilizamos as melhores tecnologias do mercado. Entre em contato, será um prazer atendê-lo.</p>
                    <a href="{{ url('/contato') }}" class="button button-red button-rounded">Entre em contato</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
        
@endsection