<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuoteRequirementsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('quote_requirements')->truncate();
        DB::table('quote_requirements')->insert([
            [
                'title' => 'The Site Location',
                'description' => 'A site location plan is really useful so that we can find you easily.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Brief Description of the Noise Assessment',
                'description' => 'Provide a short description of the noise assessment or monitoring required.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'What You Are Proposing to Do on Site',
                'description' => 'For example: building houses, installing machinery, or any other development.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}