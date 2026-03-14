<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
  public $timestamps=false;
  
  public function movies()
  { 
    return $this->hasMany('App\Models\Movie');
  }

}
