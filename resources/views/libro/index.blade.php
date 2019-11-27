<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title>Biblioteca Virtual</title>
  </head>
  <body>
    @include('encabezado')
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
          <strong> <span class="tag is-info">Nombre: {{ $libro->titulo}}</span></strong> <br/>
          <strong> <span class="tag is-info">Autor: {{ $libro->nombre_autor}}</span></strong> <br/>
          <strong> <span class="tag is-info">Categoria: {{ $libro->categoria->nombre}}</span></strong> <br/>
          <!-- <strong> <span class="tag is-info">Editorial: {{ $libro->editorial->nombre }}</span></strong> <br/> -->
           <!-- <strong>Descripcion: </strong>{{ $libro->descripcion }}         -->
           </p>
           <a  href="{{ route('libro.show', $libro->id) }}" class = 'button  is-success  is-outline'><span>Ver</span></a> </div>

         </div>
       </article>

       @endforeach
     </div>

        <div class="has-text-centered">
          <a href="{{ route('libro.create') }}"><h1 class="button is-dark is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
        </div>
      </div>
    </div>
      </section>
      @include('footer')
  </body>
</html>
