@include('includes.header')

{{-- Mostrar por pantalla --}}
<h1>Mostrar por pantalla</h1>
<h1> <?= $titulo ?> </h1>
<h2> <?= $listado[1] ?> </h2>
 {{--Utilizansodo Blade --}}
   <h1> {{$titulo}} </h1>
   <h2> {{$listado[1]}} </h2>
   <p> {{ date('Y') }}</p>

<hr/>
{{-- Mostrar si existe   --}}
<h1>Mostrar si existe</h1>
<?= isset($director)? $director : 'Director no especificado :(' ?><br/>
 {{--Utilizansodo Blade --}}
   {{ isset($director) ?  $director : 'Director no especificado :(' }}

<hr/>
{{-- Condicionales --}}
<h1>Condicionales</h1>
{{-- @if($titulo count($listado)>5)
  <h1>El título existe y es: {{$titulo}}</h1>
@else
  <h1>'Título no especificado :('</h1>
@endif --}}

{{-- @if($titulo && count($listado)>5)
  <h1>El título existe ( {{$titulo}} ) y el listado es mayor de 5 elementos :)</h1>
@else
  <h1>Título no especificado y/o listado menor de 5 elementos :(</h1>
@endif --}}

@if($titulo && count($listado)>5)
  <h1>El título existe ( {{$titulo}} ) y el listado es mayor de 5 elementos :)</h1>
  @elseif($titulo)
    <h1>El título existe ( {{$titulo}} ) y el listado contiene 5 o menos elementos :(</h1>
   @else
    <h1>Título no especificado :(</h1>
@endif

<hr/>
{{-- Bucles --}}
<h1>Bucles</h1>
{{-- @for --}}
 @for ($i = 0; $i < 10; $i++)
    Valor actual: {{ $i }} <br/>
 @endfor

{{-- @while --}}
<b>-Números Pares entre 1 y 20:</b>
<?php $contador=1; ?>
@while($contador<=20)
  @if ($contador%2==0)
    {{$contador}}
  @endif
  <?php $contador++; ?>
@endwhile

{{-- @foreach --}}
<br/><b>-Listado de Películas:</b>
<ul>
 @foreach($listado as $pelicula)
   <li> {{$pelicula}} </li>
 @endforeach
</ul>

@include('includes.footer')
