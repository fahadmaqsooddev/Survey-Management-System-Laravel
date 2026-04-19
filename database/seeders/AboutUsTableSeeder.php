<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        AboutUs::truncate();
        AboutUs::create([
            'heading' => 'About Noise Survey Ltd',
            'description'     => 'We provide professional noise assessment services for workplaces, ensuring safety and compliance with regulations.',
            'image'   => '40836-128.jpg',
        ]);
    }
}