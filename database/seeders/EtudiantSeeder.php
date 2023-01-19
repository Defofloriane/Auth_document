<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etudiant=[
            [   
                "matricule"=>"20V2412",
                "nom"=>"Essola",
                "prenom"=>"julien",
                "dateNaissance"=>"2014-05-09",
                "lieuNaissance"=>"Bonjock",
                "sexe"=>"Homme"
            ],
            [   
                "matricule"=>"20V2413",
                "nom"=>"Mbiada",
                "prenom"=>"Cedric",
                "dateNaissance"=>"2014-05-10",
                "lieuNaissance"=>"Magbe",
                "sexe"=>"Homme"
            ],
            [   
                "matricule"=>"20R2198",
                "nom"=>"EZO'O ",
                "prenom"=>"DAVID",
                "dateNaissance"=>"2001-04-08",
                "lieuNaissance"=>"YOUNDE",
                "sexe"=>"Homme"
            ],
            [   
                "matricule"=>"19G2521",
                "nom"=>"kANOU ",
                "prenom"=>"FOKOU",
                "dateNaissance"=>"2002-01-01",
                "lieuNaissance"=>"Baffoussam",
                "sexe"=>"Femme"
            ],
          
            
            ];

              Etudiant::insert($etudiant);
        
    }
}
