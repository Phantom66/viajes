<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //

    protected $fillable = [

      'letter', 'row'
    ];

    public function seatFlight(){

      return $this->hasMany('App\Flight');

    }
}
