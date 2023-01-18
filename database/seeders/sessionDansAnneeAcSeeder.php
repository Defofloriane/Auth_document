<?php

namespace Database\Seeders;

use App\Models\session;
use App\Models\sessionDansAnneeAc;
use Illuminate\Database\Seeder;

class sessionDansAnneeAcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessionDansAnneeAc=[
            [
                "session"=>"1",
                "annee_ac"=>"1",
            ]
            ];
            sessionDansAnneeAc::insert($sessionDansAnneeAc);
    }
}
