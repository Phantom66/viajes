<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Passenger extends Model
{
    //

    protected $fillable = [

        'name', 'number_identification', 'birtdate', 'phone'
    ];


    public function passengerCountry()
    {
        return $this->belongsTo('App\Country', 'country_id','id');
    }

    //El orden de los parámetros es importante
    public function passengerPay(){

      return $this->hasMany('App\Pay', 'passenger_id', 'id');

    }
}
