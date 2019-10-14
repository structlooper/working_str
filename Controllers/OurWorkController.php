<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function overview(){
        return view('overview_ourWorks');
     }
    public function education(){
        return view('education');
     }
    public function health(){
        return view('health');
     }
    public function women(){
        return view('women_enporment');
     }

}
