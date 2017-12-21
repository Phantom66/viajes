<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    //
    protected $filliable = [

    'maker', 'type', 'capacity',

  ];

  public function airplaneFlight(){

    return $this->hasMany('App\Flight');

  }

}
