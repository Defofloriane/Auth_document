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
            ];

              Etudiant::insert($etudiant);
        
    }
}
