<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('testimonials')->truncate();
        DB::table('testimonials')->insert([
            [
                'name' => 'John Smith',
                'image' => '92076-avatar_3.png',
                'message' => 'Great service and very professional team. Highly recommended!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Johnson',
                'image' => '91166-avatar_2.png',
                'message' => 'Excellent noise survey service. Everything was handled professionally.',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Brown',
                'image' => '17914-avatar_1.png',
                'message' => 'Very reliable company. The report was delivered quickly and accurately.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
