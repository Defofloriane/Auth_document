<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
use GuzzleHttp\Client;


class WebcamController extends Controller
{
    public function index()
    {
        return view('test');
    }
  function ocr(){
    $client = new Client();
    $response = $client->request('POST', 'https://api.ocr.space/parse/image', [
        'headers' => [
            'apikey' => 'K83600417488957'
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen('D:\projet\Auth_doc_projet_sout\Auth_document\storage\app\public\medias/recu.pdf', 'r')
            ]
        ]
    ]);
    
    $text = json_decode($response->getBody(), true)['ParsedResults'][0]['ParsedText'];
    echo $text;
  }
    public function store(Request $request)
    {
 
        
        $img = $request->image;
        $folderPath = storage_path('app/public/images');
        
        // Séparez la chaîne de données en base64 pour récupérer le type et les données de l'image
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1] ?? null;
        
        // Décodez les données de l'image en base64
        $image_base64 = base64_decode($image_parts[1]);
        
        // Générez un nom de fichier unique pour l'image
        $fileName = uniqid() . '.png';
        $file = $folderPath . '/' . $fileName;

        $file_pat = str_replace("D:\projet\Auth_doc_projet_sout\Auth_document\storage\app/public/"," ",$file);
        // Écrivez les données de l'image décodée dans un fichier
        file_put_contents($file, $image_base64);
        // Vérifiez si le fichier image a été créé avec succès
        if (!file_exists($file)) {
            dd('Le fichier image n\'a pas pu être créé.');
        }
   

        // Utilisez la bibliothèque TesseractOCR pour extraire le texte de l'image
        $text = new TesseractOCR("storage/$file_pat");
        $text = $text->run();
        
        // Vérifiez si le texte a été extrait avec succès
        if (empty($text)) {
            dd('Impossible d\'extraire le texte de l\'image.');
        }
        
        // Affichez le texte extrait de l'image
        echo $text;
        

// on parcourt notre chaine de caractere  et on enleve tout les 
// caracteres d'echapements (/n) du au retour a la ligne  
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

    }
}
