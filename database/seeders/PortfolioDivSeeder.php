<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioDivSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_divs')->insert(
            [
                [
                    'filter' => "filter-app",
                    'imgsrc' => "img/portfolio/portfolio-1.jpg",
                    'title' => "App 1",
                    'description' => "App",
                    'a1Title' => "App 1",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-web",
                    'imgsrc' => "img/portfolio/portfolio-2.jpg",
                    'title' => "Web 3",
                    'description' => "Web",
                    'a1Title' => "Web 3",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-app",
                    'imgsrc' => "img/portfolio/portfolio-3.jpg",
                    'title' => "App 2",
                    'description' => "App",
                    'a1Title' => "App 2",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-card",
                    'imgsrc' => "img/portfolio/portfolio-4.jpg",
                    'title' => "Card 2",
                    'description' => "Card",
                    'a1Title' => "Card 2",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-web",
                    'imgsrc' => "img/portfolio/portfolio-5.jpg",
                    'title' => "Web 2",
                    'description' => "Web",
                    'a1Title' => "Web 2",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-app",
                    'imgsrc' => "img/portfolio/portfolio-6.jpg",
                    'title' => "App 3",
                    'description' => "App",
                    'a1Title' => "App",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-card",
                    'imgsrc' => "img/portfolio/portfolio-7.jpg",
                    'title' => "Card 1",
                    'description' => "Card",
                    'a1Title' => "Card 1",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-card",
                    'imgsrc' => "img/portfolio/portfolio-8.jpg",
                    'title' => "Card 3",
                    'description' => "Card",
                    'a1Title' => "Card 3",
                    'a2href' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-web",
                    'imgsrc' => "img/portfolio/portfolio-9.jpg",
                    'title' => "Web 3",
                    'description' => "Web",
                    'a1Title' => "Web 3",
                    'a2href' => "portfolio-details.html"
                ]
            ]
        );
    }
}
