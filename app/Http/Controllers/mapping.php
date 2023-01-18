<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Facade\FlareClient\View;

class mapping extends Controller
{
    //
    public function mapping(Request $request){
        $user = User::where([
           "id" => "1"
          ])->get();
        //  echo($user[0]["email"]);
        return View('Home.qrcode_generate',compact('user'));
    }
}
