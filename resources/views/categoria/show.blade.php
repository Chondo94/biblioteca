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
      <input type="submit" value="{{ $categoria->nombre }}" class="button is-dark is-medium is-fullwidth is-rounded">
        <br>
        <table class="table is-striped is-narrow is-hoverable is-fullwidth">

          <tr>
            <th>Nombre</th><td>{{ $categoria->nombre }}</td>
          </tr>
          <tr>
            <th>Descripcion</th><td>{{ $categoria->descripcion }}</td>
          </tr>
        </table>
        <br>
        <form action="{{ route('categoria.destroy', $categoria->id)}}" method="post">
          @csrf
          @method('DELETE')
          <div class="has-text-centered">
            <a href="{{ route('categoria.index') }}" class="button is-link is-normal is-info is-rounded has-text-centere">Volver</a>
          <a href="{{ route('categoria.edit', $categoria->id) }}" class="button is-warning is-normal is-info is-rounded has-text-centered">Editar</a>
          <button class="button is-danger is-normal is-info is-rounded has-text-centered" type="submit" name="Eliminar">Eliminar</button>
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
