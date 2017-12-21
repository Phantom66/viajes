<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //
    protected $fillable = [

      'name',

    ];


    public function airportCountry(){

      return $this->belongstTo('App\Country');
    }

    public function airportFlight(){

      return $this->hasMany('App\Flight');

    }


}
