<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title></title>
  </head>
  <body>
    <br><br><br><br><br>
    <div class="columns">

    <div class="column"></div>

    <div class="column">
      <input type="submit" value="{{ $editorial->nombre }}" class="button is-black is-medium is-fullwidth is-rounded">
        <br>
        <table class="table is-striped is-narrow is-hoverable is-fullwidth">
          <!--<tr>
            <th>Nombre</th><td>{{ $editorial->nombre }}</td>
          </tr>-->
          <tr>
            <th>Nombre</th><td>{{ $editorial->nombre }}</td>
          </tr>
          <tr>
            <th>Telefono</th><td>{{ $editorial->telefono }}</td>
          </tr>
          <tr>
            <th>Direccion</th><td>{{ $editorial->direccion }}</td>
          </tr>
          <tr>
            <th>Correo electronico</th><td>{{ $editorial->email }}</td>
          </tr>

        </table>
        <br>
        <form action="{{ route('editorial.destroy', $editorial->id)}}" method="post">
          @csrf
          @method('DELETE')
          <div class="has-text-centered">
          <a href="{{ route('editorial.index') }}" class="button is-link is-normal is-info is-rounded has-text-centered">Volver</a>
          <a href="{{ route('editorial.edit', $editorial->id) }}" class="button is-warning is-normal is-info is-rounded has-text-centered">Editar</a>
          <input type="submit" value="Eliminar" class="button is-danger is-normal is-info is-rounded has-text-centered">
        </div>
        </form>
    </div>

    <div class="column"></div>

    </div>
  </body>
</html>
