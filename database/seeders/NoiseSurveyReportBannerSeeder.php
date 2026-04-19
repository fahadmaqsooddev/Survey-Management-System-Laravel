<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NoiseSurveyReportBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('noise_survey_report_banners')->insert([
            'title' => 'Noise Survey Reports',
            'image' => '52695-banner_7_environmental.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
