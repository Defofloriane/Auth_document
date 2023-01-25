<?php

namespace Database\Seeders;

use App\Models\departement;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departement=[
            [
                "nomDepartement"=>"departement informatique",
            ],
            [
                "nomDepartement"=>"departement mathematique",
            ],
            [
                "nomDepartement"=>"departement physique",
            ],
           ];
           departement::insert($departement);
    }
}
