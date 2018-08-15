<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'state', 'country_id',
    ];

    public function country(){

      return $this->belongsTo('App\Country');
    }

    public function cities(){

      return $this->hasMany('App\City');
    }

    public function customers(){

      return $this->hasMany('App\Customer');
    }
}

