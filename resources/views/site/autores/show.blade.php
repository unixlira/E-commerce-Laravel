@extends('site._template')

@section('content')

<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/about/sobre_nos.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 bottommargin">
                        <img src="{{ assetsCliente($autor->imagem) }}" class="" alt="{{ $autor->nome }}" title="{{ $autor->nome }}">
                    </div>

                    <div class="col-md-8 bottommargin">
                        <div class="product-title">
                            <h2>{{ $autor->nome }}</h2>
                        </div>
                        <div class="team-content">
                            <p>
                                {!! nl2br($autor->descricao) !!}
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="fancy-title title-double-border title-center">
                <h3>
                    Livros do <span>{{ $autor->tipo->nome }}</span>
                </h3>
            </div>

            <div class="container clearfix bottommargin-sm">
                <div id="shop" class="shop grid-container clearfix" data-layout="fitRows" >
                    @foreach($autor->produtos as $pivot)
                    <div class="product clearfix">
                        <div class="thumbnail img-centralize" id="totalContent">
                            <a href="{{ url(sprintf('%s/%s', $pivot->produto->categoria->slug, $pivot->produto->slug)) }}"><img src="{{ assetsCliente(sprintf('images/%s', $pivot->produto->imagem)) }}" alt="{{ $pivot->produto->nome }}" title="{{ $pivot->produto->nome }}" class=""></a>
                        </div>
                        <div class="product-desc">
                            <div class="product-title"><h3><a href="{{ url(sprintf('%s/%s', $pivot->produto->categoria->slug, $pivot->produto->slug)) }}">{{ $pivot->produto->nome }}</a></h3></div>
                            <div class="description">
                                <strong>Autor:</strong> 
                                @foreach($pivot->produto->autores as $vinculo)
                                <a href="{{ url(sprintf('autores/%s', $vinculo->autor->slug)) }}">{{ $vinculo->autor->nome }}</a>
                                @endforeach
                            </div>
                            <div class="description">
                                <strong>Ilustrador:</strong>
                                @foreach($pivot->produto->ilustradores as $vinculo)
                                <a href="{{ url(sprintf('autores/%s', $vinculo->autor->slug)) }}">{{ $vinculo->autor->nome }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
        
@endsection