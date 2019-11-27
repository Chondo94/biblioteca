<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title></title>
  </head>
  <body><br><br>
    <div class="columns">
      <div class="column"></div>

    <div class="column">
      <h1 id="editar" class="subtitle is-2 has-text-centered">Registrar Categoria</h1>
    <form method="post" action="{{ route('categoria.store') }}">

        {{ csrf_field() }}
        <div class="field">
          <div class="control">
            <input type="text" name="nombre"  class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" maxlength="50" placeholder="Nombre"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="text" name="descripcion"  class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" maxlength="250" placeholder="Descripcion"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded"  required>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <a href="{{ route('categoria.index') }}" class="button is-link is-medium is-fullwidth is-rounded">Volver</a>
          </div>
        </div>
    </form>
  </div>

  <div class="column"></div>

  </div>
  </body>
</html>
