<?php

namespace Database\Seeders;

use App\Models\examDansSession;
use Illuminate\Database\Seeder;

class ExamDansSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examDansSession=[
            [
                "ue"=>"1",
                "session"=>"1",
                "exam"=>"1",
            ]
            ];
            examDansSession::insert($examDansSession);
    }
}
