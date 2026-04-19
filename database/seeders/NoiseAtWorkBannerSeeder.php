<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NoiseAtWorkBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noise_at_work_banners')->insert([
            'title' => 'Noise At Work',
            'image' => '96177-banner_7_environmental.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
