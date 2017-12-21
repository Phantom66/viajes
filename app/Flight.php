<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //


  public function flightReservation(){

    return $this->belongstTo('App\Reservation');

  }

  public function flightAirport(){

    return $this->belongstTo('App\Airport');

  }

  public function flightTariff(){

    return $this->belongstTo('App\Tariff');

  }

  public function flightAirplane(){

    return $this->belongstTo('App\Airplane');

  }

  public function flightSeat(){

    return $this->belongstTo('App\Seat');

  }



}
