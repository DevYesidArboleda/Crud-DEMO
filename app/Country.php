<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name', 'state',
    ];

    public function departments(){

    	return $this->hasMany('App\Department');
    }
}
