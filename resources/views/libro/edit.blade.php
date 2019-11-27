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
      <h1 id="editar" class="subtitle is-2 has-text-centered">Editar Libro</h1>
    <form method="post" action="{{ route('libro.update', $libro->id) }}">

        @csrf
        @method('PATCH')
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
            <input type="text" name="isbn"  class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z 0-9]+" maxlength="50" placeholder="Ingrese ISBN" value="{{ $libro->isbn }}"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="text" name="titulo"  class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" minlength="3" maxlength="50" placeholder="Nombre Libro" value="{{ $libro->titulo }}"><br>
          </div>
        </div>

        <!-- <div class="field">
          <div class="control">
            <input type="file" name="img" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="" value="{{ $libro->img }}"><br>
          </div>
        </div> -->

        <div class="field">
          <div class="control">
            <input type="text" name="descripcion" class="input is-primary is-large has-text-centered is-rounded"  required pattern="[A-Z a-z]+" maxlength="250" placeholder="Descripcion" value="{{ $libro->descripcion }}"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="text" name="nombre_autor" class="input is-primary is-large has-text-centered is-rounded"  required pattern="[A-Z a-z]+" maxlength="50" placeholder="Nombre Autor" value="{{ $libro->nombre_autor }}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="total_copies" class="input is-primary is-large has-text-centered is-rounded"  required pattern="[0-9]+" placeholder="Numero de paginas" value="{{ $libro->total_copies }}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="date" name="publicacion" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Fecha de publicacion" value="{{ $libro->publicacion }}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="categoria_id" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Categoria" value="{{ $libro->categoria_id }}"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="editorial_id" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Editorial" value="{{ $libro->editorial_id }}"><br>
          </div>
        </div>

        <div class="has-text-centered">
        <input type="submit" value="guardar" class="button is-success is-active is-medium is-rounded has-text-centered" required>
        <a href="{{ route('libro.index') }}" class="button is-link is-active is-medium is-rounded has-text-centered">Volver</a>
      </div>
    </form>
    </div>

    <div class="column"></div>

  </div>
  </body>
</html>
