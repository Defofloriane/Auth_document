<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Releve1 extends Controller
{
    public function releve1(){
        return view('Home.mapping1');
    }
    public function releve2(){
        return view('Home.mapping2');
    }
    public function releve3(){
        return view('Home.mapping3');
    }
}
