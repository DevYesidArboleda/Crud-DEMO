<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $fillable=[
  	'codigo','urlfile',
  ];

  public function afiliado(){

    return $this->belongsTo('App\Afiliado');
  }
}
