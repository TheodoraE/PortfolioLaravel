<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_docs')->insert(
            [
                [
                    "name" => 'Cv Eng',
                    "src" => "YHL12j8XHneCsLZHmQN6vG0w5mzBNbat7wclsOb5.pdf"
                ]
            ]
        );
    }
}
