<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volleyball extends Model
{
    
    
    public function Bastketball(){
        // $profile = Profile::where('user_id',$this->id)->first();
        // $profile = Profile::where('foreing_key',$this->local_key)->first();
        return $this->hasOne('App\Models\Bastketball'); 
 
     }
    use HasFactory;
}
