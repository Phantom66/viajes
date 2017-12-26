<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    //

    protected $fillable = [

        'date_pay','total'
    ];

    public function payPassenger(){

      return $this->belongsTo('App/Passenger', 'passenger_id', 'id');
    }

    public function payReservatiion(){

      return $this->belongsTo('App/Reservation');
    }
    //


}
