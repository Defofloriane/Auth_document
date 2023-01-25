<?php

namespace Database\Seeders;

use App\Models\specPourFiliere;
use Illuminate\Database\Seeder;

class SpecPourFiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specPourFiliere=[
            [
                "specialite"=>"2",
                "niveau"=>"2",
                "filiere"=>"1",
            ]
            ];
            specPourFiliere::insert($specPourFiliere);
    }
}
