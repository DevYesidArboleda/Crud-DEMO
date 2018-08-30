<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
  public function beneficiarios(){

  	return $this->hasMany('App\Beneficiario');
  }

  public function scopeSeach($query, $s) {
  	if ($s) {
  		return $query->where('eps_actual', 'LIKE', "%$s%")->orWhere('arl_actual', 'LIKE', "%$s%")->orWhere('first_name', 'LIKE', "%$s%")->orWhere('last_name', 'LIKE', "%$s%");
  	}
  }
  
}
