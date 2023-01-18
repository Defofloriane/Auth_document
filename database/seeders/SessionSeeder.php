<?php

namespace Database\Seeders;

use App\Models\session;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $session=[
            [
             
                "semestre"=>"1",
                "typeSession"=>"examen",
            ],
            [
             
                "semestre"=>"2",
                "typeSession"=>"examen",
            ]
            ];
            session::insert($session);
    }
}
