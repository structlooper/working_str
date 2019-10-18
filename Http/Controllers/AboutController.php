<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about_us(){
        return view('about.about_us');

    }
   

    public function team(){
        return view('about.team');
    }
    
    
}
?>