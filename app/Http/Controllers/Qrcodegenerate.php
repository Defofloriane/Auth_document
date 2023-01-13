<?php

namespace App\Http\Controllers;
use \PDF;
use Dompdf\Dompdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Qrcodegenerate extends Controller
{
     function qrcode(){
        return view('qrcode_generate');
    }

    function export_pdf(){
      
    

    $qrcode =  QrCode::size(250)->generate('Make me into a QrCode!');
    
   
    $dompdf = new Dompdf();
    $dompdf->loadHtml(view('qrcode_generate'));
    // $doc = new DOMDocument();
    // $dompdf->loadHTMLFile(view('qrcode_generate'));
  
    
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    $dompdf->stream("qrcode");
    

 }    
 function login(){
   return view('login');
 }                
}

 