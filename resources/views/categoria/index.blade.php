<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
    <style media="screen">
      body{
        /* background-image: url("img/fondo.jpg"); */

      }
      #centro{
        background-image: url("img/fondoc.jpg");
      }
    </style>
  </head>
  <body style="background: url('img/fondo.jpg');"><br>
    <section class="section">
      <div class="columns is-centered">
        <div class="column is-narrow">
        <input type="submit" value="Categoria de Libros" class="button is-black is-medium is-fullwidth is-rounded">
        <br>
        <div class="box" id="centro">

   @foreach($categoria as $categoria)


   <article class="media">
     <!-- <div class="media-left">
       <figure class="image is-64x64">
       </figure>
     </div> -->
     <div class="media-content">
       <div class="content">
         <p>
           <strong>{{ $categoria->nombre }}</strong> <small>.</small><br>
           {{ $categoria->descripcion }}        </p>
             <form action="{{ route('categoria.destroy', $categoria->id)}}" method="post">
               @csrf
               @method('DELETE')
               <div class="has-text-centered">
                 <a  href="{{ route('categoria.show', $categoria->id) }}" class = 'button is-dark is-outline is-rounded'><span>Ver</span></a>
               </div>
             </form>
         </div>
       </article>

       @endforeach
     </div>

        <div class="has-text-centered">
          <a href="{{ route('categoria.create') }}"><h1 class="button is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
        </div>
      </div>
    </div>
      </section>

  </body>
</html>
