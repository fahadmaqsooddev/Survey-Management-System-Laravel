<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoiseSurveyReportSeeder extends Seeder
{
    public function run(): void
    {
        $reports = [
            [
                'heading' => 'Noise Survey Report',
                'image' => '56078-20220902_150152.jpg',
                'description' => '<p>As noise consultants we provide noise survey and monitoring services as well as solutions to control the spread of noise or vibrations.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'heading' => 'Noise Monitoring',
                'image' => '16466-20210406_153110.jpg',
                'description' => '<p>We can monitor compliance to noise and vibration restrictions and assist with compliance.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'heading' => 'Industrial Noise & Vibration Control',
                'image' => '11866-20221201_114434.jpg',
                'description' => '<p>We provide noise survey plus assessment and design solutions to noise and vibration from industrial processes.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('noise_survey_reports')->insert($reports);
    }
}