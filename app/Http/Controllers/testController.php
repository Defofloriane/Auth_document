<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function index()
    {
        $siswas = DB::table('siswas')->get();
 
        return view('siswas', compact('siswas'));
    }
}
