<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;


use Illuminate\Http\Request;

class Releve1 extends Controller
{
    public function releve1(){
        $etudiant = Etudiant::where([
            "matricule" => "20V2412"
           ])->get();
        //    echo($etudiant[0]["nom"]);
        return view('Home.mapping1',compact('etudiant'));
    }

    public function releve2(){
        return view('Home.mapping2');
    }
    public function releve3(){
        return view('Home.mapping3');
    }
}
