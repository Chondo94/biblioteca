<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
  protected $fillable = ['nombre', 'descripcion'];

  public function libro(){ //esta funcion sirve para hacer referencia a la tabla hijo que seria
    return $this->belongsTo('App\libro');// la tabla OrderDetail
}
}
