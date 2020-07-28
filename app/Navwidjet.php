<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navwidjet extends Model
{
    public function navigation(){
        return $this->hasOne('App\Navigation', 'id');
    }
}
