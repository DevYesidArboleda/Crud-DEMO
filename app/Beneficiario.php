<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
  public function afiliado(){

    return $this->belongsTo('App\Afiliado');
  }
  
}
