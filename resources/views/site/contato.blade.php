@extends('site._template')
@section('content')

<section id="google-map" class="gmap slider-parallax"></section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin">
                <h3>Entre em contato</h3>
                <div class="contact-widget">
                    <div class="contact-form-result"></div>
                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="{{ url('contato') }}" method="post">
                        {{csrf_field()}}                                                    
                        <div class="form-process"></div>
                        <div class="col_one_third">
                            <label for="template-contactform-name">Nome <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="nome" value="" class="sm-form-control required" />
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">E-mail <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Telefone</label>
                            <input type="text" id="template-contactform-phone" name="telefone" value="" class="sm-form-control" />
                        </div>

                        <div class="clear"></div>

                        <div class="col_two_third">
                            <label for="template-contactform-subject">Assunto <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="assunto" value="" class="required sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">Serviços</label>
                            <select id="template-contactform-service" name="servico" class="sm-form-control">
                                <option value="">-- Escolha --</option>
                                     @foreach(session('site')['categorias'] as $categoria)                                    
                                     <option>{{$categoria->nome}}</option>                                   
                                     @endforeach
                            </select>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-message">Mensagem <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="mensagem" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="botcheck" value="" class="sm-form-control" />
                        </div>

                        <div class="col_full">
                            <button class="button button-red button-rounded" type="submit" id="template-contactform-submit" name="submit" value="submit">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="sidebar col_last nobottommargin">
                <address>
                    
                    <strong>Laboratório:</strong><br>
                    {{ session('site')['rua'] }}, {{ session('site')['numero'] }}<br>
                    {{ session('site')['bairro'] }}<br>
                    {{ session('site')['cidade'] }} - {{ session('site')['uf'] }}<br>
                    CEP: {{ session('site')['cep'] }}<br>
                    Brasil<br>
                </address>
                         <?php
                            $linhas = explode("\n", session('site')['telefone']);
                         ?>
                         @foreach($linhas as $linha)
                         <?php $tipo = explode(":", $linha); ?>
                         <abbr title="Telefone {{ $tipo[0] }}"><strong>{{ $tipo[0] }}:</strong></abbr> {{ $tipo[1] }}<br>
                         @endforeach
                         <abbr title="E-mail"><strong>Email: </strong></abbr><a href="mailto:{{session('site')['email']}} ">{{session('site')['email']}}</a>

                <div class="widget noborder notoppadding">
                    <a href="#" class="social-icon si-small si-dark si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-dark si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-dark si-dribbble">
                        <i class="icon-dribbble"></i>
                        <i class="icon-dribbble"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-dark si-forrst">
                        <i class="icon-forrst"></i>
                        <i class="icon-forrst"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-dark si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-dark si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>

<script type="text/javascript" src="{{ assetsCliente('js/jquery.gmap.js') }}"></script>

<script type="text/javascript">
    jQuery('#google-map').gMap({
        latitude: -22.8658505,
        longitude: -48.4552138,
        maptype: 'ROADMAP',
        zoom: 18,
        markers: [
            {
                address: "{{ session('site')['rua'] }}, {{ session('site')['numero'] }}, {{ session('site')['bairro'] }}, {{ session('site')['cidade'] }}, {{ session('site')['uf'] }} ", 
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;"><span>{{ session('site')['nome_fantasia'] }}</span></h4><p class="nobottommargin"><strong>{{ session('site')['rua'] }}, {{ session('site')['numero'] }}</strong>.<br> Bairro: {{ session('site')['bairro'] }}<br> {{ session('site')['cidade'] }} - {{ session('site')['uf'] }} - Brasil<br> <strong>Fone: {!! explode("\n", session('site')['telefone'])[0] !!} </strong> </p></div>',
                icon: {
                    image: "images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [13,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
    });

    // jQuery("#template-contactform-phone").mask("(99) 9999-9999");
</script>
@endsection