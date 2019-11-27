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
      <h1 id="editar" class="subtitle is-2 has-text-centered">Editar Categoria</h1>
    <form method="post" action="{{ route('categoria.update', $categoria->id) }}">

        @csrf
        @method('PATCH')
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
            <input type="text" name="nombre" class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" maxlength="50" placeholder="Nombre de Categoria" value="{{ $categoria->nombre }}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="descripcion" class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" maxlength="250" placeholder="Descripcion" value="{{ $categoria->descripcion }}"><br>
          </div>
        </div>

        <div class="has-text-centered">
        <button class="button is-primary is-active is-medium is-rounded has-text-centered"  type="submit" name="guardar">Guardar</button>
        <a href="{{ route('categoria.index') }}" class="button is-link is-active is-medium is-rounded has-text-centered">Volver</a>
      </div>
    </form>
    </div>

    <div class="column"></div>

  </div>
  </body>
</html>
