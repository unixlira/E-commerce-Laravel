Cadastro para recebimento de Artigos do site.
<br><br>
Nome: {{$name}}<br><br>
Email: {{$email}}<br><br>
Categorias de Interesse:<br>
@if(is_array($categories))
<ul>
@foreach($categories as $category)
    <li>{{ $category }}</li>
@endforeach
</ul>
@endif