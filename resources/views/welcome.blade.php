<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    #pie {
      /* aca limpia los espacios que existen con los otros div o cajas */
      clear: both;
      /* este es el alto que se le esta dando */
      width: 100%;
      /* aca le decimos que tenga un margen de 0 y que se centre */
      margin: 0px auto;
      /* aca le colocamos un fondo */
      background: linear-gradient(to bottom, #f9f9f9 0px, #e9e9e9 100%);
      /* aca le estamos dando un border */
      border: 1px solid #c9c9c9;
      /* aca le decimos que el borde solo se muestre en la parte superior. */
      border-bottom: none;
      /* aca le aplicamos un border a la parte superior derecha e izquierda */
      /* 1)parte superior izquierda, 2) parte superior derecha, 3)parte inferior izquierda, 4) parte inferior derecha */
      border-radius: 8px 8px 0px 0px;
      color: #666;
      height: auto;
      padding: 15px;
      /* aca le dechimos que nos alinea el texto al centro. */
      text-align: center;
    }
  </style>
  <title>Document</title>
</head>

<body>
  @include('encabezado')
  <div class="columns">
    <div class="column"></div>
    <div class="column">
      <div class="content">
        <h1>bienvenidos, este es el cuerpo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
          Temporibus ipsam aut, velit sunt eius nostrum soluta vero <br>
          at tempore eaque nisi. Est sapiente doloremque quo iste nemo <br>
          ad quos architecto?</p>
      </div>
    </div>
    <div class="column"></div>
  </div>
  @include('footer');

</body>

</html>