<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scanController extends Controller
{
    public function scan(){
        return view('scan');
    }
    public function validasi(Request $request){
        $qr=$request->qr_code;
        print_r($qr);
        // $data='123';
        // if($qr==$data){
        //   return response()->json([
        //     'statuss' =>200,
        //   ]);
        // }
        // else{
        //     return response()->json([
        //         'statuss' =>400,
        //       ]);
        // }
      
    }
}
