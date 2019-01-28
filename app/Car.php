<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $table = 'cars';

  public function kits()
    {
        return $this->hasMany('App\Kit');
    }
  public function sensors()
    {
      return $this->belongsToMany('App\Sensor')->withPivot('data');
    }
    public function user()
      {
        return $this->belongsTo('App\User');
      }

}
