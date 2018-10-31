@extends('site._template')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ assetsCliente('images/about/distribuidores.jpg') }}'); padding: 120px 0;" data-stellar-background-ratio="0.3">

</section><!-- #page-title end -->

<!-- Content
============================================= -->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_full" style="margin-top: -40px;">   
                <div class="col_half" id="page-title">
                    <h1>Editoras Distribuídas</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="clear"></div>
                    <div class="row">
                        @foreach($parceiros as $editora)
                        <div class="col-md-3 bottommargin">
                            <div class="hoverzoom">
                                <a href="{{ $editora->link }}" class="" target="_blank"><img src="{{ assetsCliente($editora->imagem) }}" class="alignright notopmargin" alt="{{ $editora->nome }}" title="{{ $editora->nome }}"></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>

@endsection

@section('scripts')
        
@endsection