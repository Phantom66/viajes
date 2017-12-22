<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    protected $fillable = [

      'name'

    ];


    public function countryPassenger()
    {
        return $this->hasMany('App\Passenger');

    }

    public function countryAirport(){

      return $this->hasMany('App\Airport');

    }
}
