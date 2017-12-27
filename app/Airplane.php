<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    //
    protected $filliable = [

    'maker', 'type', 'capacity'

  ];

  public function airplaneFlight(){

    return $this->belongsTo('App\Flight', 'flight_id', 'id');

  }
  public funtcion airplaneAirline(){

    return $this->belongsTo('App\Airline', 'airline_id', 'id')
  }

}
