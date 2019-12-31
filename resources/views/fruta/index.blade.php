<h1>Listado de Frutas</h1>
{{-- <ul>
    @foreach ($frutas as $fruta)
      <li> {{ $fruta->nombre }}</li>
    @endforeach
</ul> --}}

<h3><a href="{{ action('FrutaController@create') }}"> Crear fruta </h3>
@if(session('status'))
 <p style="background:green;color:white;">
    {{ session('status') }}
 </p>
@endif

<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a href="{{ action('FrutaController@detail',['id' => $fruta->id ]) }}">
                {{ $fruta->nombre }}
            </a>
        </li>
    @endforeach
</ul>
