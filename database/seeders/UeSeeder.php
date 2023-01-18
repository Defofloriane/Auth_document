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
               "id_ue"=>"1",
               "codeUe"=>"ENGL203",
               "intitule"=>"English",
               "nbreCredit"=>"2",
               "volumeHoraire"=>"50",
               "typeUe"=>"sans tp",
               "categorieUe"=>"optionnel",
            ],
            [
                "id_ue"=>"2",
                "codeUe"=>"ICT201",
                "intitule"=>"introduction to software engining",
                "nbreCredit"=>"6",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"3",
                "codeUe"=>"ICT202",
                "intitule"=>"software developpement of mobile devices",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"4",
                "codeUe"=>"ICT204",
                "intitule"=>"introction to operating system",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"5",
                "codeUe"=>"ICT205",
                "intitule"=>"introduction to programming in .NET",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"6",
                "codeUe"=>"ICT206",
                "intitule"=>"introduction to programming NETWORK",
                "nbreCredit"=>"7",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"7",
                "codeUe"=>"ICT207",
                "intitule"=>"software developement in JAVA",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"8",
                "codeUe"=>"ICT208",
                "intitule"=>"computer architecture",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"9",
                "codeUe"=>"ICT210",
                "intitule"=>"database programming",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"10",
                "codeUe"=>"ICT215",
                "intitule"=>"introduction to computer network",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
                "id_ue"=>"11",
                "codeUe"=>"ICT216",
                "intitule"=>"network administration",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
                          [
                "id_ue"=>"12",
                "codeUe"=>"ICT218",
                "intitule"=>"Advanced Mobile Application Development",
                "nbreCredit"=>"5",
                "volumeHoraire"=>"50",
                "typeUe"=>"a tp",
                "categorieUe"=>"obligatioire",
             ],
             [
               "id_ue"=>"13",
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
