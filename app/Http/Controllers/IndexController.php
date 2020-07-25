<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function execute(Request $request) {
        if(view()->exists('electro.index')){
            return view('electro.index');
        }
    }
}
