<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scanController extends Controller
{
    public function scan(){
        return view('scan');
    }
    public function validasi(Request $request){
        dd($request->all());
    }
}
