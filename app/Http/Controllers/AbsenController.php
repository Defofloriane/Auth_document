<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function store(Request $request){
       $cek= Etudiant::where([
         'matricule' => $request->id_siswa,
       ])->first();
       if($cek){
        return redirect('/')->with('gagal', $cek->matricule);
       }
       else{
      //  Absen::create(
      //   [            
      //     'id_siswa' => $request->id_siswa,
      //     'tanggal' => date('Y-m-d'),
      //   ]
      //   );
       return redirect('/')->with('sucess', 'Document Non Authentique');
      }
    }

    public function welcome(){
      return View('welcome');
    }
}
