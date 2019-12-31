<h1>{{ $fruta->nombre }}</h1>
<p>
  <b>- Descripción: </b> {{ $fruta->descripcion }} <br/>
  <b>- Precio:      </b> {{ $fruta->precio }}      <br/>
</p>

<a href="{{ action('FrutaController@delete',['id' => $fruta->id]) }}">Eliminar </a>
<a href="{{ action('FrutaController@edit',['id' => $fruta->id]) }}"> Actualizar </a>
