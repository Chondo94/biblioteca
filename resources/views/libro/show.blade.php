<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body>
    <br><br><br><br><br>
    <div class="columns">

    <div class="column"></div>

    <div class="column">
      <input type="submit" value="{{ $libro->categoria->nombre}}" class="button is-dark is-medium is-fullwidth is-rounded">
        <br>
        <table class="table is-striped is-narrow is-hoverable is-fullwidth">
          <!--<tr>
            <th>Nombre</th><td>{{ $libro->titulo }}</td>
          </tr>-->
          <tr>
            <th>Nombre</th><td>{{ $libro->titulo }}</td>
          </tr>
          <tr>
            <th>Descripcion</th><td>{{ $libro->descripcion }}</td>
          </tr>
          <tr>
            <th>Nombre de Autor</th><td>{{ $libro->nombre_autor }}</td>
          </tr>
          <tr>
            <th>Copias totales</th><td>{{ $libro->total_copies }}</td>
          </tr>
          <tr>
            <th>Fecha de publicacion</th><td>{{ $libro->publicacion}}</td>
          </tr>
          <tr>
            <th>Fecha que se registro</th><td>{{ $libro->fecha_registro}}</td>
          </tr>
          <tr>
            <th>Categoria</th><td>{{ $libro->categoria_id}}</td>
          </tr>
          <tr>
            <th>Editorial</th><td>{{ $libro->editorial_id}}</td>
          </tr>
        </table>
        <br>
        <form action="{{ route('libro.destroy', $libro->id)}}" method="post">
          @csrf
          @method('DELETE')
          <div class="has-text-centered">
            <a href="{{ route('libro.index') }}" class="button is-link is-normal is-info is-rounded has-text-centere">Volver</a>
          <a href="{{ route('libro.edit', $libro->id) }}" class="button is-success is-normal is-info is-rounded has-text-centered">Editar</a>
          <input type="submit" value="Eliminar" class="button is-danger is-normal is-info is-rounded has-text-centered">
        </div>
        </form>
    </div>

    <div class="column"></div>

    <span class="icon has-text-warning">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
    </div>
  </body>
</html>
