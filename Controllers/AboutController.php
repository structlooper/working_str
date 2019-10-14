<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function history(){
        return view('history');

    }
    public function fields(){
        return view('fields');
}
    public function team(){
        return view('team');
    }
    public function resources(){
        return view('resources');
    }
}
?>