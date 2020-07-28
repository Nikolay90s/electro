<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{   
    public function navwidjet(){
        return $this->belongsTo('App\Navwidjet');
    }
}
