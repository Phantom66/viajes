<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    protected $fillable = [

      'price', 'date_reservation', 'description'

    ];

    public function reservationFlight(){

      return $this->hasMany('App/Flight');

    }

}
