<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [
                //SiswaSeeder::class,
                EtudiantSeeder::class,
                UeSeeder::class,
                niveauSeeder::class,
                SpecialiteSeeder::class,
                FiliereSeeder::class,
                AnneeAcademiqueSeeder::class,
                EvaluationSeeder::class,
                DepartementSeeder::class,
                sessionSeeder::class,
                EstDansFiliereSeeder::class,
                ExamDansSessionSeeder::class,
                sessionDansAnneeAcSeeder::class,
                FilDansDeptSeeder::class,
                EstInscritDansSeeder::class,
                SpecPourFiliereSeeder::class,
                ParticipeSeeder::class,
                
          ]);
        // \App\Models\Etudiant::factory(10)->create();
     
     
    }
}
