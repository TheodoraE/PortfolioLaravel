<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_interests')->insert(
            [
                [
                    'divColClass' => "",
                    'iClass' => "ri-store-line",
                    'iColor' => "color: #ffbb2c;",
                    'description' => "Lorem Ipsum"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "ri-bar-chart-box-line",
                    'iColor' => "color: #5578ff;",
                    'description' => "Dolor Sitema"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "ri-calendar-todo-line",
                    'iColor' => "color: #e80368;",
                    'description' => "Sed perspiciatis"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "ri-paint-brush-line",
                    'iColor' => "color: #e361ff;",
                    'description' => "Magni Dolores"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-database-2-line",
                    'iColor' => "color: #47aeff;",
                    'description' => "Nemo Enim"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-gradienter-line",
                    'iColor' => "color: #ffa76e;",
                    'description' => "Eiusmod Tempor"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-file-list-3-line",
                    'iColor' => "color: #11dbcf;",
                    'description' => "Midela Teren"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-price-tag-2-line",
                    'iColor' => "color: #4233ff;",
                    'description' => "Pira Neve"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-anchor-line",
                    'iColor' => "color: #b2904f;",
                    'description' => "Dirada Pack"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-disc-line",
                    'iColor' => "color: #b20969;",
                    'description' => "Moton Ideal"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-base-station-line",
                    'iColor' => "color: #ff5828;",
                    'description' => "Verdo Park"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-fingerprint-line",
                    'iColor' => "color: #29cc61;",
                    'description' => "Flavor Nivelanda"
                ]
            ]
        );
    }
}
