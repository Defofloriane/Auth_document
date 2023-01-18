<?php

namespace Database\Seeders;

use App\Models\filDansDept;
use Illuminate\Database\Seeder;

class FilDansDeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filDansDept=[
            [
                "departement"=>"1",
            ],
            [
                "departement"=>"2",
            ],
            [
                "departement"=>"3",
            ],
        ];
        filDansDept::insert($filDansDept);
    }
}
