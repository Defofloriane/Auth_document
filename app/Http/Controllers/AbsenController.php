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
        return redirect('/')->with('gagal', 'anda suda absen');
       }
       Absen::create(
        [
          'id_siswa' => $request->id_siswa,
          'tanggal' => date('Y-m-d'),
        ]
        );
       return redirect('/')->with('sucess', 'silahkan masuk');
    }
}
