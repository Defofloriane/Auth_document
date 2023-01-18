<?php

namespace Database\Seeders;

use App\Models\evaluation;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evaluation=[
            [
             
                "dateExam"=>"2022/11/22",
                "noteSur"=>"20",
                "typeExam"=>"controle continu"

            ],
            [
               
                "dateExam"=>"2022/01/22",
                "noteSur"=>"40",
                "typeExam"=>"session normal",

            ], 
            [
             
                "dateExam"=>"2022/01/25",
                "noteSur"=>"40",
                "typeExam"=>"travaux pratique"
            ],
            ];
            evaluation::insert($evaluation);
    }
}
