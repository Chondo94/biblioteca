<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
  protected $fillable = ['isbn', 'titulo', 'img', 'descripcion', 'nombre_autor', 'total_copies', 'publicacion', 'categoria_id', 'editorial_id'];

  public function categoria(){
    return $this->belongsTo('App\Categoria');
}

  public function editorial(){
    return $this->belongsTo('App\Editorial');
}



}
