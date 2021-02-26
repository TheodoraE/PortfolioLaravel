<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_cards')->insert(
            [
                [
                    'divColClass' => "",
                    'iClass' => "bx bx-map",
                    'title' => "My Address",
                    'description' => "A108 Adam Street, New York, NY 535022"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "bx bx-share-alt",
                    'title' => "Social Profiles",
                    'description' => ""
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "bx bx-envelope",
                    'title' => "Email Me",
                    'description' => "contact@example.com"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "bx bx-phone-call",
                    'title' => "Call Me",
                    'description' => "+1 5589 55488 55"
                ]
            ]
        );
    }
}
