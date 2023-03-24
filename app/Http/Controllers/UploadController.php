<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use  Illuminate\Http\Response;
use thiagoalessio\TesseractOCR\TesseractOCR;
use thiagoalessio\TesseractOCR\ImageNotFoundException;
use Exception;
use Intervention\Image\ImageManagerStatic as Image;
use PhpParser\Node\Stmt\Return_;

class UploadController extends Controller
{
    public function uploadPhoto(Request $request) {
        $data = $request->input('photo');
        $image_parts = explode(";base64,", $data);
        $image_base64 = base64_decode($image_parts[1]);
        $file_name = 'photo_'.time().'.jpg';
        file_put_contents($file_name, $image_base64);
        return response()->json(['success'=>'Image téléchargée avec succès.']);
    }
    public function scan_releve(Request $request){

// Récupérer le Data URI de l'image depuis une source, par exemple une base de données

        return view('scan_releve');
     
 
    }
    public function upload(Request $request)
    {


        $file_name = time() . "_" . $request->file('name_file')->getClientOriginalName();
        $file_path = $request->file('name_file')->storeAs("medias", $file_name, "public");

        $text = new TesseractOCR("storage/$file_path");
        $text = $text->run();
       
        $strings =  str_replace("\n", " ", $text);
        
        // recuperation du tableau de chaines de caracteres
        $strings = explode(' ', $strings); 

        //recuperation de nos delimiteurs
        $index_fin_filiere = 0;
        for ($j = 0; $j < count($strings); $j++) {
            if ($strings[$j] == "Level") {
                $index_fin_filiere = $j;
            }
        }

        // recuperation de nos valeurs 
        
        $matricule = "";
        $filiere = "";
        $niveau = "";
        $nom = "";
        $prenom = "";
        $numero_releve = "";
        $domaine = "";
        $annee_academique = "";
        $mgp = "";
        $decision = "";

        // cette boucle nous permet de recuperer tous les index cles , qui nous permettrtons de 
        // faire la distinction dans notre tableau de chaines 

        for ($i = 0; $i < count($strings); $i++) {
            // recuperation du matricule
            if ($strings[$i] == "Matricule") {
                if(($strings[$i + 1])[0] == ":"){

                    $matricule = explode('\n', $strings[$i + 2])[0];
                }else{
                    $matricule = explode('\n', $strings[$i + 1])[0];
                }
            }
            if ($strings[$i] == "etP,") {
                $numero_releve =  $strings[$i + 1];
                $nom = explode('\n', $strings[$i + 4])[0];
                $prenom = ($strings[$i + 5]);
            }
            //recuperation de la filiere
            if ($strings[$i] == "Niveau:") {
                $filiere = $this->getElementsInsideInterval($strings, $i + 1, $index_fin_filiere);
            }
        }
        return $strings;

        return "Etudiant ".$nom." ".$prenom." de la filiere : " . $filiere . " et de matricule " . $matricule."et numero de releve".$numero_releve;
    }

    // cette fonction peremt de recuperer les strings dans notre tableau de chaine entre un intervale 
    // precis
    public function getElementsInsideInterval($stringsTab, $min, $max)
    {
        $result = "";
        // on parcourt notre intervale et on recupere tous les elements entre celui ci
        for ($i = $min; $i < $max; $i++) {
            $result = $result . ' ' . $stringsTab[$i];
        }
        return $result;
    }
}
