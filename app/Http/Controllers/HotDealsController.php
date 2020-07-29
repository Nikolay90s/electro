<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotDealsController extends Controller
{
    public function execute(){
      return view('electro.product');
    }
}