<?php

namespace App\Http\Controllers;
use \PDF;
use Dompdf\Dompdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Qrcodegenerate extends Controller
{
     function qrcode(){
        return view('Home.qrcode_generate');
    }

    function export_pdf(){
      
    
        @include ('bootstraps');
    $qrcode =  QrCode::size(250)->generate('Make me into a QrCode!');
    
 
    $dompdf = new Dompdf();

    
    $dompdf->loadHtml(view('Home.qrcode_generate'));
    // $doc = new DOMDocument();
    // $dompdf->loadHTMLFile(view('qrcode_generate'));
  
   //  $dompdf->set_base_path("/www/public/css/releve.css");
    $dompdf->set_base_path(__DIR__ . '/css/releve.css"');
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4');
    
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    $dompdf->stream("qrcode",[
      "Attachment" => true
  ]);
    
// $dompdf = new Dompdf();
// $html = view('Home.qrcode_generate')->render();
// $dompdf->setPaper('A1', 'landscape');
// $html .= '<link type="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>';
// $dompdf->loadHtml($html);

// $dompdf->render();
// $dompdf->stream("relever");
 }    
          
 function page1(){
    return view('Home.page1');
}
}

 