<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
  // Relacion Uno a Muchos 
  public function Leon(){
    return $this->hasMany('App\Models\Leon');
}  use HasFactory;
}
