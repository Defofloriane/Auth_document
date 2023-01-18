<?php

namespace Database\Seeders;

use App\Models\filiere;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filiere=[
            [
                
                "nomFiliere"=>"ICT4D",
                "descriptionFiliere"=>"The information and communication technology"
            ]
            ];
            filiere::insert($filiere);
    }
}
