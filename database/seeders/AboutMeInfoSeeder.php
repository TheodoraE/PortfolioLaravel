<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutMeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_me_infos')->insert(
            [
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Birthday:",
                    'text' => "1 May 1995"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Website:",
                    'text' => "www.example.com"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Phone:",
                    'text' => "+123 456 7890"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "City:",
                    'text' => "New York, USA"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Age:",
                    'text' => "30"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Degree:",
                    'text' => "Master"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Email",
                    'text' => "email@example.com"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Freelance",
                    'text' => "Available"
                ]
            ]
        );
    }
}
