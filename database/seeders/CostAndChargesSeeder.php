<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CostAndCharge;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class CostAndChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('cost_and_charges')->truncate();

        DB::table('cost_and_charges')->insert([
            'title' => 'Noise Survey Cost',
            'description' => 'Costs depend on the survey type, site size, and monitoring duration. Contact us for an accurate quote.',
            'image' => '9050-costs-banner.jpg',
            'banner_image' => 'banner_6_work.jpg',
            'banner_title' => 'Test title',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
