<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function current(){
       return view('pursuningEvents');
    }
    public function upcoming(){
    return view('upcomingEvents');
    }
    public function history(){
        return view('historyEvents');
    }

}
