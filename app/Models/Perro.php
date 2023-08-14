<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    //Relacion Muchos a Muchos
     public function Gato(){
        return $this->belongsToMany('App\Models\Gato');
    }
    use HasFactory;
}
