<?php

namespace Database\Seeders;

use App\Models\estDansFiliere;
use Illuminate\Database\Seeder;

class EstDansFiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estDansFiliere=[
            [
                "ue"=>"1",
                "niveau"=>"2",
                "filiere"=>"1",
            ],
            [
                "ue"=>"2",
                "niveau"=>"2",
                "filiere"=>"1",
            ],
        ];
        estDansFiliere::insert($estDansFiliere);
    }
}
