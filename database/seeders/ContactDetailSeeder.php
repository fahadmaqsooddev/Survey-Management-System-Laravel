<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ContactDetailSeeder extends Seeder
{
    public function run(): void
    {
        // Clear previous data
        DB::table('contact_details')->truncate();

        // Insert new contact info
        DB::table('contact_details')->insert([
            [
                'heading' => 'Feel Free Contact Us',
                'description' => 'If you have any questions, feel free to contact us through the form or reach us directly via phone or email.',
                'phone' => '0800 772 0431',
                'email' => 'info@noisesurveyltd.co.uk',
                'banner_image' => 'banner_6_work.jpg',
                'quote_request_image' => '59201-noise.jpg',
                'monitoring_setup_image' => 'contact.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}