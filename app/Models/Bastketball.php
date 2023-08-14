<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bastketball extends Model
{public function Volleyball()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');

       return $this->belongsTo('App\Models\Volleyball');
    }
    use HasFactory;
}
