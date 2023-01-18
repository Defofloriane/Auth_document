<?php

namespace Database\Seeders;

use App\Models\specialite;
use Illuminate\Database\Seeder;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialite=[
            [
               
                "nomSpecialite"=>"reseaux",
                "descriptionSpecialite"=>"administration",
            ],
            [
              
                "nomSpecialite"=>"GL",
                "descriptionSpecialite"=>"conception des applications",
            ],
            [
               
                "nomSpecialite"=>"securite",
                "descriptionSpecialite"=>"securite reseaux etc...",
            ],
            ];
            specialite::insert($specialite);
    }
}
