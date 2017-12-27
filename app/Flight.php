<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //


  public function flightReservation(){

    return $this->belongsTo('App\Reservation','reservation_id', 'id');

  }

  public function flightAirport(){

    return $this->belongsTo('App\Airport','airport_id', 'id');

  }

  public function flightTariff(){

    return $this->belongsTo('App\Tariff','tariff_id', 'id');

  }

  public function flightAirplane(){

    return $this->belongsTo('App\Airplane','airplane_id', 'id');

  }

  public function flightSeat(){

    return $this->belongsTo('App\Seat','sear_id', 'id');

  }



}
