@extends('site._template')

@section('content')

<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/about/autores.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_full" style="margin-top: -40px;">   
                <div class="col_half" id="page-title">
                    <h1>Autores</h1>
                </div>
            </div>
            <div class="col_full">
                <div class="row clearfix">
                    @foreach($autores as $autor)
                    <div class="col-md-3 col-sm-6 bottommargin">
                        <div class="team">
                            <div class="team-image">
                                <a href="{{ url(sprintf('autores/%s', $autor->slug)) }}"><img src="{{ assetsCliente($autor->imagem) }}" class="image_fade" alt="{{ $autor->nome }}" title="{{ $autor->nome }}"></a>
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <h4>
                                        <a href="{{ url(sprintf('autores/%s', $autor->slug)) }}">{{ $autor->nome }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
                <div class="row clearfix pages">
                    {{ $autores->render() }}
                </div>
            </div>
        </div>
    </div> 
</section>

@endsection

@section('scripts')
        
@endsection