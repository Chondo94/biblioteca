<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body>
    <br><br>
    <div class="columns">
    <div class="column"></div>
    <div class="column">
      <h1 class="subtitle is-2 has-text-centered">Editar Editorial</h1>
    <form method="post" action="{{ route('editorial.update', $editorial->id) }}">

        @csrf
        @method('PATCH')
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
            <input type="text" name="nombre" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Nombre Editorial"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="telefono" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Telefono"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="direccion" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Direccion"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="email" name="email" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Correo electronico"><br>
          </div>
        </div>

        <div class="has-text-centered">
          <input type="submit" value="guardar" class="button is-active is-medium is-rounded has-text-centered" required>
        </div>
    </form>
    </div>

    <div class="column"></div>

  </div>
  </body>
</html>
