<?php

namespace Database\Seeders;

use App\Models\anneeAcademique;
use Illuminate\Database\Seeder;

class AnneeAcademiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anneeAcademique=[
            [
                
            ],
            [
               
            ]
            ];
            anneeAcademique::insert($anneeAcademique);
    }
}
