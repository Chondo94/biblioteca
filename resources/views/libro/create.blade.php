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
      <h1 id="editar" class="subtitle is-2 has-text-centered">Registrar Libro</h1>
      <form method="post" action="{{ route('libro.store') }}">

        {{ csrf_field() }}
        <div class="field">
          <div class="control">
            <input type="text" name="isbn" class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z 0-9]+" maxlength="50" placeholder="Ingrese ISBN"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="titulo" class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" minlength="3" maxlength="50" placeholder="Nombre Libro"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="descripcion" class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" maxlength="250" placeholder="Descripcion"><br>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="text" name="nombre_autor" class="input is-primary is-large has-text-centered is-rounded" required pattern="[A-Z a-z]+" minlength="3" maxlength="50" placeholder="Nombre Autor"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="total_copies" class="input is-primary is-large has-text-centered is-rounded" required pattern="[0-9]+" placeholder="Copias totales del libro"><br>
          </div>
        </div>

        <div class="field">
          <!-- <label class="label">Categoria</label> -->
          <div class="select is-primary is-rounded is-medium">
            <select name="categoria_id">
              @foreach($categoria as $categoria)
              <option value="{{$categoria['id']}}">Cod.{{$categoria['id']}} {{$categoria['nombre']}}</option>
              @endforeach
            </select>
          </div>
          <!-- </div> -->

          <!-- <div class="field">
          <div class="control">
            <input type="text" name="categoria_id" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Categoria"><br>
          </div>
        </div> -->

          <!-- <div class="field"> -->
          <!-- <label class="label">Fecha Publicacion</label> -->
          <div class="select is-primary is-rounded is-medium">
            <select name="editorial_id">
              @foreach($editorial as $editorial)
              <option value="{{$editorial['id']}}">Cod.{{$editorial['id']}} {{$editorial['nombre']}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <!-- <div class="field">
          <div class="control">
            <input type="text" name="editorial_id" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Editorial"><br>
          </div>
        </div> -->

        <div class="field">
          <label class="label">Fecha Publicacion</label>
          <div class="control">
            <input type="Date" name="publicacion" class="input is-primary is-large has-text-centered is-rounded" required placeholder=""><br>
          </div>
        </div>

        <div class="field">
        <div class="control">
            <input type="file" name="img" class="file is-primary is-large has-text-centered is-rounded" required placeholder="Seleccione una imagen"><br>
        </div>
        </div>

        <!-- <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded"  required> -->
        <div class="field">
          <div class="control">
            <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded" required>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <a href="{{ route('libro.index') }}" class="button is-link is-medium is-fullwidth is-rounded">Volver</a>
          </div>
        </div>
      </form>
    </div>

    <div class="column"></div>

  </div>
</body>

</html>