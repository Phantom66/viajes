<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    //


    protected $filliable = [

      'name_airline',

    ];


    public function airlineAirplane(){

      return $this->hasMany('App\Airplane');
    }


}
