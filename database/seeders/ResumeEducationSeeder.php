<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_education')->insert(
            [
                [
                    'title' => "Master of Fine Arts & Graphic Design",
                    'date' => "2015 - 2016",
                    'institution' => "Rochester Institute of Technology, Rochester, NY",
                    'description' => "Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend"
                ],
                [
                    'title' => "Bachelor of Fine Arts & Graphic Design",
                    'date' => "2010 - 2014",
                    'institution' => "Rochester Institute of Technology, Rochester, NY",
                    'description' => "Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila"
                ]
            ]
        );
    }
}
