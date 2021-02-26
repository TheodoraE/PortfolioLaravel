<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_filters')->insert(
            [
                [
                    'data' => "*",
                    'name' => "All"
                ],
                [
                    'data' => ".filter-app",
                    'name' => "App"
                ],
                [
                    'data' => ".filter-card",
                    'name' => "Card"
                ],
                [
                    'data' => ".filter-web",
                    'name' => "Web"
                ]
            ]
        );
    }
}
