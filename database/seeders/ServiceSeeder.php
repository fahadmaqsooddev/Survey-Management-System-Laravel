<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // Pehle table empty karo
        DB::table('services')->truncate();

        DB::table('services')->insert([

            [
                'id' => 1,
                'heading' => 'Noise Survey Report 1',
                'description' => '<p>As noise consultants we provide noise survey and monitoring services as well as solutions to control the spread of noise or vibrations.</p>',
                'image' => '76750-116.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 2,
                'heading' => 'Noise at Work Assessment',
                'description' => '<p>Employers have a responsibility to carry out workplace noise risk assessments where there is risk to health from exposure to noise in the workplace</p>',
                'image' => '63305-025.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 3,
                'heading' => 'Vibration and HAV assessment',
                'description' => '<p>Monitoring can be for as long as it is required. Typically this can be for a day in the case of a single event such as a quarry, demolition or blast monitoring.</p>',
                'image' => '63940-20221201_114458.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 4,
                'heading' => 'BS4142 Report',
                'description' => '<p>BS4142 Report can be used to assess the potential impact of noise from commercial or industrial noise sources affecting residential properties.</p>',
                'image' => '27580-20210406_153110.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 5,
                'heading' => 'BS8233 Noise Survey',
                'description' => '<p>A BS8233 noise assessment refers to &#39;guidance on sound insulation and noise reduction for buildings&#39;</p>',
                'image' => '49168-047.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}