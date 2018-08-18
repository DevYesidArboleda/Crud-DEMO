<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
  public function beneficiarios(){

  	return $this->hasMany('App\Beneficiario');
  }

  public function scopeSeach($q, $s) {
  	if ($s) {
  		return $q->where('eps_actual', 'LIKE', "%$s%")->orWhere('arl_actual', 'LIKE', "%$s%");
  	}
  }
  
}
