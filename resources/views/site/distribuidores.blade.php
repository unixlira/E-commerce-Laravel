@extends('site._template')

@section('content')

<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/about/distribuidores.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_full" style="margin-top: -40px;">   
                <div class="col_half" id="page-title">
                    <h1>Distribuidores</h1>
                </div>
            </div>
            <div class="col_full">
                <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
                @foreach($distribuidores as $distribuidor)
                <div class="col_one_third {{ ((++$i % 3) == 0 ? 'col_last' : '') }}">
                    <div class="feature-box fbox-border">
                        <div class="fbox-icon">
                            <i class="i-alt">{{ $i }}</i>
                        </div>
                        <h3>{{ $distribuidor->titulo }}</h3>
                        <span class="distribution">{{ $distribuidor->nome }}</span>
                        <p>{{ $distribuidor->rua }}, {{ $distribuidor->numero }} {{ $distribuidor->complemento }}<br>
                        {{ $distribuidor->bairro }}<br>
                        {{ $distribuidor->cidade }} - {{ $distribuidor->uf }}<br>
                        CEP: 42700-000<br>
                        Fone: {{ $distribuidor->telefone }}</p>
                    </div>
                </div>
                @if(($i % 3) == 0)
                <div class="clear"></div>
                @endif
                @endforeach
            </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
        
@endsection