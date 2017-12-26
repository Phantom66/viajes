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
        return $this->hasMany('App\Passenger', 'id', 'passenger_id');

    }

    public function countryAirport(){

      return $this->hasMany('App\Airport', 'id', 'country_id');

    }
}
