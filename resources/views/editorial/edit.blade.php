<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body>
    <br><br>
    <div class="columns">
    <div class="column"></div>
    <div class="column">
      <h1 id="editar" class="subtitle is-2 has-text-centered">Actualizar Editorial</h1>
    <form method="post" action="{{ route('editorial.update', $editorial->id) }}">

        @csrf
        @method('PATCH')
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
            <input type="text" name="nombre" class="input is-primary is-large has-text-centered is-rounded"  required pattern="[A-Z a-z]+" maxlength="50" placeholder="Nombre Editorial" value="{{$editorial->nombre}}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="telefono" class="input is-primary is-large has-text-centered is-rounded"  required pattern="[A-Z a-z 0-9]+" maxlength="50" placeholder="Telefono" value="{{$editorial->telefono}}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="direccion" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Direccion" value="{{$editorial->direccion}}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="email" name="email" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Correo electronico" value="{{$editorial->email}}"><br>
          </div>
        </div>

        <div class="has-text-centered">
        <input type="submit" value="guardar" class="button is-success is-active is-medium is-rounded has-text-centered" required>
        <a href="{{ route('editorial.index') }}" class="button is-link is-active is-medium is-rounded has-text-centered">Volver</a>
        </div>
    </form>
    </div>

    <div class="column"></div>

  </div>
  </body>
</html>
