<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
  <!--este comando me sirve para llamar a Bulma-->
  <title>Biblioteca/categoria</title>
</head>

<body>

@include ('encabezado')
<br>
  <div class="columns">

    <div class="column"></div>

    <div class="column">
      <input type="submit" value="Categorias" class="button is-black is-medium is-fullwidth is-rounded">
      <br>
      <table class="table  is-striped is-narrow is-hoverable is-fullwidth">
        <tr>
          <th>Nombre</th>
          <th>Informacion</th>
        </tr>

        @foreach($categoria as $categoria)
        <!--la primero "student" es la variable que se creo en el controlador index. -->

        <tr>
          <td>{{ $categoria->nombre }}</td>
          <!-- <td>{{ $categoria->descripcion }}</td> -->
          <td><a href="{{ route('categoria.show', $categoria->id) }}" class="button is-dark">Ver</a></td>
        </tr>

        @endforeach
      </table>

      <div class="has-text-centered">
        <a href="{{ route('categoria.create') }}">
          <h1 class="button is-dark is-active is-medium is-rounded has-text-centered">Registrar</h1>
        </a>
      </div>
    </div>

    <div class="column"></div>

  </div>

  @include ('footer')
</body>

</html>