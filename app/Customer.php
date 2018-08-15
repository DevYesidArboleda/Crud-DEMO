<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'age', 'phone', 'cellphone', 'email', 'profession', 'identification_type', 'identification_number', 'interest', 'departament_id', 'city_id',
    ];

    public function department(){

    	return $this->belongsTo('App\Department');
    }

    public function city(){

    	return $this->belongsTo('App\City');
    }
}
