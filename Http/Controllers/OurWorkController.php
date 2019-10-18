<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurWorkController extends Controller
{
   
    public function education(){
        return view('ourworks.education');
     }
    public function health(){
        return view('ourworks.health');
     }
    public function women(){
        return view('ourworks.women_enporment');
     }

}
