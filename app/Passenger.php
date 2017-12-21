<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    //

    protected $fillable = [

        'name', 'number_identification', 'birtdate', 'phone'
    ];
    //hola Mundo

    public function passengerCountry()
    {
        return $this->belongsTo('App\Country');
    }

    public function passengerPay(){

      return $this->hasMany('App\Pay');

    }
}
