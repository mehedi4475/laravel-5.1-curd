<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class kg extends Controller
{
    public function index(){
        return view('kg/index');
    }
    
    public function aboutkg(){
        return view('kg/about-us');
    }
    
    public function properties(){
        return view('kg/properties');
    } 
    
    public function mehedi(){
        return view('mehedi');
    }
    
    public function contact(){
       return view('kg/contact');
    }
    
    public function login(Request $request){
         $name = $request->all();
        
        return $name;
    }
   
}
