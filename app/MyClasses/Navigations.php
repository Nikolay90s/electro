<?php

namespace App\Myclasses;

use Illuminate\Support\Facades\DB;

class Navigations
{
    public function nav() {
        $nav = DB::select('SELECT * FROM navigations');
        return $nav;
    }
}