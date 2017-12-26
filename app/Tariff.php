<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    //

    protected $fillable = [

      'class', 'price'

    ];

    public function tariffFlight(){

      return $this->hasMany('App\Flight');

    }
}
