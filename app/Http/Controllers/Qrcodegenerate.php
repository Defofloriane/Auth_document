<?php

namespace App\Http\Controllers;


use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Etudiant;


class Qrcodegenerate extends Controller

{
    public function recognize(Request $request)
    {
        $imagePath = $request->file('image')->getPathname();

        $result = app('tesseract')->run($imagePath);

        return response()->json($result);
    }

    function qrcode()
    {
        return view('Home.qrcode_generate');
    }
   

    function export_pdf(Request $resquest)
    {



        @include('bootstraps');
      


        $dompdf = new Dompdf();
        $user = User::where([
            "id" => "1"
        ])->get();
        $etudiant = Etudiant::where([
            "matricule" => "20V2412"
        ])->get();
        echo ($etudiant[0]["nom"]);

        $dompdf->loadHtml(view('Home.qrcode_generate', compact('etudiant')));
      

      
        $dompdf->setBasePath(__DIR__ . '/css/releve.css"');
        $dompdf->setPaper('A4');

        $dompdf->render();

        $dompdf->stream("qrcode", [
            "Attachment" => true
        ]);

      
    }

    function page1()
    {
        return view('Home.page1');
    }
}
