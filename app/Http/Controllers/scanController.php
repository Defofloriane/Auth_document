<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scanController extends Controller
{
    public function scan(){
        return view('scan');
    }
    public function validasi(Request $request){
        $qr=$request->reader;
        if($qr=='O1FsrCU8IAzFn9SjVSSZlpp9drhHhQNRYp1Jr74j'){
          return  redirect('/validasi')->with('your',$qr);
        }
        else{
          return  redirect('/validasi')->with('my',$qr);
        }
 
      
    }
}
