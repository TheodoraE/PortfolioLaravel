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
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ],
                [
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ],
                [
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ],
                [
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ],
                [
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ],
                [
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ],
                [
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ],
                [
                    'icon' => "",
                    'title' => "",
                    'text' => ""
                ]
            ]
        );
    }
}
