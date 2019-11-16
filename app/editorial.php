<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
  protected $fillable = ['nombre', 'telefono', 'direccion', 'email'];

  public function libro(){ //esta funcion sirve para hacer referencia a la tabla hijo que seria
    return $this->hasMany('App\Libro');// la tabla OrderDetail
}
}
