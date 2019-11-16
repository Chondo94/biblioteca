<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
  protected $fillable = ['isbn', 'titulo', 'descripcion', 'nombre_autor', 'total_copies', 'publicacion', 'fecha_registro', 'categoria_id', 'editorial_id',];

  public function categoria(){
    return $this->belongsTo('App\Categoria');
}

  public function editorial(){
    return $this->belongsTo('App\Editorial');
}

}
