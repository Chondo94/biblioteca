<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body><br><br>
    <div class="columns">
      <div class="column"></div>

    <div class="column">
      <h1 class="subtitle is-2 has-text-centered">Registrar Libro</h1>
    <form method="post" action="{{ route('libro.store') }}">

        {{ csrf_field() }}
        <div class="field">
          <div class="control">
            <input type="text" name="isbn"  class="input is-primary is-large has-text-centered is-rounded" required placeholder="Ingrese ISBN"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="text" name="titulo"  class="input is-primary is-large has-text-centered is-rounded" required placeholder="Nombre Libro"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="descripcion" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Descripcion"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="text" name="nombre_autor" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Nombre Autor"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="total_copies" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Numero de paginas"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="date" name="publicacion" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Fecha de publicacion"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="date" name="fecha_registro" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Fecha de Registro"><br>
          </div>
        </div>

        <select name="categoria_id">
          @foreach($categoria as $categoria)
          <option value="{{$categoria['id']}}">{{$categoria['nombre']}}</option>
          @endforeach

        </select>
        <!-- <div class="field">
          <div class="control">
            <input type="text" name="categoria_id" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Categoria"><br>
          </div>
        </div> -->

        <select name="editorial_id">
          @foreach($editorial as $editorial)
          <option value="{{$editorial['id']}}">{{$editorial['nombre']}}</option>
          @endforeach
        </select>

        <!-- <div class="field">
          <div class="control">
            <input type="text" name="editorial_id" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Editorial"><br>
          </div>
        </div> -->

        <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded"  required>
    </form>
  </div>

  <div class="column"></div>

  </div>
  </body>
</html>
