<?php

namespace App\Myclasses;

use Illuminate\Support\Facades\DB;
use App\Navwidjet;
use App\Navigation;

class Navigations
{
    public function nav() {
        $nav = DB::select('SELECT * FROM navigations');
        return $nav;
    }
    
    public function navWidjets(){
        $naw = Navwidjet::get()->all();
        foreach ($naw as $n){
            $n->nav_id = Navigation::where('id', $n->nav_id)->first();
        }
        return $naw;
    }
}