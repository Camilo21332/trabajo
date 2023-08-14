<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leon extends Model
{//Relacion Uno a Muchos (Inversa) con User
    public function Sport(){
        return $this->belongsTo('App\Models\Sport');
    }
    use HasFactory;
}
