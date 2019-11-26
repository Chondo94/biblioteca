<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title>Biblioteca/Editorial</title>
  </head>
  <body>

  @include ('encabezado')
  <br>
  
<div class="columns">

  <div class="column"></div>

  <div class="column">
    <input type="submit" value="Editoriales" class="button is-black is-medium is-fullwidth is-rounded">
    <br>
    <table class="table  is-striped is-narrow is-hoverable is-fullwidth">
        <tr>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Correo electronico</th>
        </tr>

    @foreach($editorial as $editorial) <!--la primero "student" es la variable que se creo en el controlador index. -->

    <tr>
      <td>{{ $editorial->nombre }}</td>
      <td>{{ $editorial->telefono }}</td>
      <td>{{ $editorial->direccion }}</td>
      <td>{{ $editorial->email }}</td>
      <td><a href="{{ route('editorial.show', $editorial->id) }}" class="button is-dark">Ver</a></td>
    </tr>

    @endforeach
    </table>

    <div class="has-text-centered">
      <a href="{{ route('editorial.create') }}"><h1 class="button is-dark is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
    </div>
  </div>

    <div class="column"></div>

  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  @include ('footer')

  </body>
</html>
