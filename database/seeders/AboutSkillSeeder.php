<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_skills')->insert(
            [
                [
                    'skill' => "HTML",
                    'iValue' => "100%",
                    'ariaValue' => 100
                ],
                [
                    'skill' => "CSS",
                    'iValue' => "90%",
                    'ariaValue' => 90
                ],
                [
                    'skill' => "JavaScript",
                    'iValue' => "75%",
                    'ariaValue' => 75
                ],
                [
                    'skill' => "PHP",
                    'iValue' => "80%",
                    'ariaValue' => 80
                ],
                [
                    'skill' => "WordPress/CMS",
                    'iValue' => "90%",
                    'ariaValue' => 90
                ],
                [
                    'skill' => "Photoshop",
                    'iValue' => "55%",
                    'ariaValue' => 55
                ]
            ]
        );
    }
}
