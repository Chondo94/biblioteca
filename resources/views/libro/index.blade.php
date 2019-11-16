<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body><br><br><br>
    <section class="section">
      <div class="columns is-centered">
        <div class="column is-narrow">
        <input type="submit" value="Libros" class="button is-black is-medium is-fullwidth is-rounded">
        <br>
        <div class="box">

   @foreach($libro as $libro)


   <article class="media">
     <div class="media-left">
       <figure class="image is-64x64">
         <img src="{{ asset($libro->img) }}">
       </figure>
     </div>
     <div class="media-content">
       <div class="content">
         <p>
           <strong>{{ $libro->nombre }}</strong> <small>.</small> <small>{{ $libro->categoria->nombre}}</small>
           <br><span class="tag is-info">{{ $libro->editorial_id }}</span> <br>
           Publicado:{{ $libro->publicacion }}<br>
           {{ $libro->descripcion }}        </p>
           <a  href="{{ route('libro.show', $libro->id) }}" class = 'button  is-success  is-outline'><span>Editar</span></a>   </div>

         </div>
       </article>

       @endforeach
     </div>

        <div class="has-text-centered">
          <a href="{{ route('libro.create') }}"><h1 class="button is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
        </div>
      </div>
    </div>
      </section>

  </body>
</html>
