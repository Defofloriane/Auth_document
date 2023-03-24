<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Etudiant;

use Facade\FlareClient\View;

class mapping extends Controller
{
    //
    public function mapping(Request $request){
        $user = User::where([
           "id" => "1"
          ])->get();
        //  echo($user[0]["email"]);
        $etudiant = Etudiant::where([
            "matricule" => "20V2412"
           ])->get();
           echo($etudiant[0]["nom"]);
        return View('Home.mapping',compact('etudiant'));
    }
}
