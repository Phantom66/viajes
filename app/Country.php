<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    protected $fillable = [

      'name_countries'

    ];


    public function countryPassenger()
    {
        return $this->hasMany('App\Passenger', 'passenger_id','id');

    }

    public function countryAirport(){

      return $this->hasMany('App\Airport', 'country_id', 'id');

    }
}
