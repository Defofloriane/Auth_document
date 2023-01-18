<?php

namespace Database\Seeders;

use App\Models\ue;
use Illuminate\Database\Seeder;

class UeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ue=[
            [
            
               "codeUe"=>"ENGL203",
               "intitule"=>"English",
               "nbreCredit"=>"2",
               "volumeHoraire"=>"50",
               "typeUe"=>"sans tp",
               "categorieUe"=>"optionnel",
            ],
            [
               
                "codeUe"=>"ICT201",
                "intitule"=>"introduction to software engining",
                "nbreCredit"=>"6",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
             
                "codeUe"=>"ICT202",
                "intitule"=>"software developpement of mobile devices",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
               
                "codeUe"=>"ICT204",
                "intitule"=>"introction to operating system",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
            
                "codeUe"=>"ICT205",
                "intitule"=>"introduction to programming in .NET",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                
                "codeUe"=>"ICT206",
                "intitule"=>"introduction to programming NETWORK",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
             
                "codeUe"=>"ICT207",
                "intitule"=>"software developement in JAVA",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
               
                "codeUe"=>"ICT208",
                "intitule"=>"computer architecture",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
            
                "codeUe"=>"ICT210",
                "intitule"=>"database programming",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
             
                "codeUe"=>"ICT215",
                "intitule"=>"introduction to computer network",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
              
                "codeUe"=>"ICT216",
                "intitule"=>"network administration",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
                          [
               
                "codeUe"=>"ICT218",
                "intitule"=>"Advanced Mobile Application Development",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
               
               "codeUe"=>"ICT217",
               "intitule"=>"Software Engineering",
               "nbreCredit"=>"5",
               "volumeHoraire"=>"50",
               "typeUe"=>"a tp",
               "categorieUe"=>"obligatioire",
            ],
            ];
            ue::insert($ue);
    }
}
