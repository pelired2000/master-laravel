<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title> Título- @yield('titulo') </title>
  </head>
  <body>
      @section('header')
       <h1> -- :O Cabecera de la Web (master) -- </h1>
      @show
      <hr>
      <div class="container">
        @yield('content')
      </div>
      <hr>
      @section('footer')
       <h1> -- :P Pie de Página (master) -- </h1>
      @show
  </body>
</html>
