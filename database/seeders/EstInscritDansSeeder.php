<?php

namespace Database\Seeders;

use App\Models\estInscrit;
use Illuminate\Database\Seeder;

class EstInscritDansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $estInscritDans=[
        [
            "matEtudiant"=>"20V2412",
            "niveau"=>"2",
            "filiere"=>"1",
            "annee"=>"1",
        ],
        [
            "matEtudiant"=>"20V2413",
            "niveau"=>"2",
            "filiere"=>"1",
            "annee"=>"1",
        ],
    ];
    estInscrit::insert($estInscritDans);
    }
}
