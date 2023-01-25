<?php

namespace Database\Seeders;

use App\Models\participe;
use Illuminate\Database\Seeder;

class ParticipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $particpe=[
            [
                "matEtudiant"=>"20V2412",
                "ue"=>"1",
                "examen"=>"1",
                "note"=>"10",
            ],
            [
                "matEtudiant"=>"20V2412",
                "ue"=>"1",
                "examen"=>"2",
                "note"=>"10",
            ],
            [
                "matEtudiant"=>"20V2412",
                "ue"=>"1",
                "examen"=>"3",
                "note"=>"10",
            ],

            ];
            participe::insert($particpe);
    }
}
