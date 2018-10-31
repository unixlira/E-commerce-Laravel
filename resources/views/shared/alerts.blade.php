@if(Session::has('flash_message'))
<div class="panel-alert">
    <div class="alert-wrap in">
        <div class="alert alert-success" role="alert" id="photo-alert">
            <button class="close" type="button" data-dismiss="alert"><i class="fa fa-times-circle"></i></button>
            <div class="media">
                {{ Session::get('flash_message') }}
            </div>
        </div>
    </div>
</div>
@endif
@if(Session::has('error_message'))
<div class="row">
	<div class="panel-alert">
	    <div class="alert-wrap in">
	        <div class="alert alert-danger" role="alert" id="post-alert">
	            <button class="close" type="button" data-dismiss="alert"><i class="fa fa-times-circle"></i></button>
	            <div class="media">
	                {!! Session::get('error_message') !!}
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endif
@if (count($errors) > 0)
<div class="panel-alert">
    <div class="alert-wrap in">
        <div class="alert alert-danger" role="alert" id="post-alert">
            <button class="close" type="button" data-dismiss="alert"><i class="fa fa-times-circle"></i></button>
            <div class="media">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
<!-- Alertas Ajax -->

<div class="panel-alert alert-ajax" style="display: none">
    <div class="alert-wrap in">
        <div class="alert alert-success" role="alert" id="photo-alert">
            <button class="close" type="button" data-dismiss="alert"><i class="fa fa-times-circle"></i></button>
            <div class="media">
                
            </div>
        </div>
    </div>
</div>