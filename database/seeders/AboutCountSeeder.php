<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_counts')->insert(
            [
                [
                    'divColClass' => "",
                    'iClass' => "icofont-simple-smile",
                    'number' => 232,
                    'description' => "Happy Clients"
                ],
                [
                    'divColClass' => "mt-5 mt-md-0",
                    'iClass' => "icofont-document-folder",
                    'number' => 521,
                    'description' => "Projects"
                ],
                [
                    'divColClass' => "mt-5 mt-lg-0",
                    'iClass' => "icofont-live-support",
                    'number' => 1463,
                    'description' => "Hours Of Support"
                ],
                [
                    'divColClass' => "mt-5 mt-lg-0",
                    'iClass' => "icofont-users-alt-5",
                    'number' => 15,
                    'description' => "Hard Workers"
                ]
            ]
        );
    }
}
