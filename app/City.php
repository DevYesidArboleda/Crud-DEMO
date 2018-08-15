<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'state', 'departament_id',
    ];
    
    public function department(){

    	return $this->belongsTo('App\Department');
    }

    public function customers(){

    	return $this->hasMany('App\Customer');
    }
}
