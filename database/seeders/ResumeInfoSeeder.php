<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_infos')->insert(
            [
                [
                    'info' => "Portland par 127,Orlando, FL"
                ],
                [
                    'info' => "(123) 456-7891"
                ],
                [
                    'info' => "alice.barkley@example.com"
                ]
            ]
        );
    }
}
