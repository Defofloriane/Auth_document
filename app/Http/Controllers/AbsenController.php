<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function store(Request $request){
       $cek= Absen::where([
         'id_siswa' => $request->id_siswa,
         'tanggal' => date('Y-m-d'),
       ])->first();
       if($cek){
        return redirect('/store')->with('gagal', 'anda suda absen');
       }
       else{
       Absen::create(
        [
          'id_siswa' => $request->id_siswa,
          'tanggal' => date('Y-m-d'),
        ]
        );
       return redirect('/store')->with('sucess', 'silahkan masuk');
      }
    }
}
