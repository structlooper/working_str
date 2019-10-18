<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
}


    public function contact(){
        return view('index.contact');
    }

    public function donate(){
        return view('index.donate');
    }


}
?>
