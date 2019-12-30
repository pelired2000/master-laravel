<h1> {{$titulo}} </h1>
<p>(Acción index del Controlador PeliculasController)</p>

@if(isset($pagina))
 <h3> La página actual es la {{$pagina}} </h3>
@endif

{{-- <a href="{{ action('PeliculaController@detalle') }}"> Ir al detalle </a> --}}
<a href="{{ route('detalle.pelicula') }}"> Ir al detalle </a>
