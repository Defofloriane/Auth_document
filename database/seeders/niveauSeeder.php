<?php

namespace Database\Seeders;

use App\Models\niveau;
use Illuminate\Database\Seeder;

class niveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveau=[
        [
            
            "niveau"=>"L1",
        ],
        [
            
            "niveau"=>"L2",
        ],
        [
           
            "niveau"=>"L3",
        ],
    ];
    niveau::insert($niveau);

    }
}
