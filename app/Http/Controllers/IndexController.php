<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myclasses\Navigations;

class IndexController extends Controller
{
    protected $navigations;
    
    public function __construct(Navigations $navigations){
        $this->navigations = $navigations;
    }
    
    public function execute(Request $request) {
        if(view()->exists('electro.index')){
            
            $navs = $this->navigations->nav();
            
            $data = [
                'navs' => $navs,
            ];
            
            return view('electro.index', $data);
        }
    }
}
