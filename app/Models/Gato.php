<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    //Relacion Muchos a Muchos
     public function Perro(){
        return $this->belongsToMany('App\Models\Perro');
    }
    use HasFactory;
}
