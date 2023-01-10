<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa=[
                [
                    'nis'=>'111',
                    'nama'=>'hisyam'
                ],
                [
                    'nis'=>'222',
                    'nama'=>'zubair'
                ] 
        ];
        Siswa::insert($siswa);
    }
}
