<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Table truncate kar do pehle
        DB::table('banners')->truncate();

        DB::table('banners')->insert([
            [
                'heading' => 'Welcome to Noise Survey',
                'description' => 'We provide professional noise surveys and consultancy services for all industries.',
                'image' => '23253-noise.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'heading' => 'Accurate Noise Assessment',
                'description' => 'Our team ensures precise measurements and compliance with safety standards.',
                'image' => '12605-banner_6_work.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'heading' => 'Trusted by Professionals',
                'description' => 'Over 1000 satisfied clients rely on our expertise in noise and vibration surveys.',
                'image' => '58372-banner_1_environmental.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}