<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoiseAtWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reports = [
            [
                'heading' => 'Noise At Work',
                'image' => '79790-025.jpg',
                'description' => <<<HTML
<p>Employers have a responsibility to carry out workplace noise risk assessments where there is risk to health from exposure to noise in the workplace. We carry out assessments and provide recommendations to demonstrate compliance with The Control of Noise at Work Regulations 2005. This demonstrates whether noise levels are at:</p>

<ul>
    <li>Lower exposure action value of 80dBA daily (or weekly) LCpeak max 135 dBC</li>
    <li>Upper exposure action value of 85dBA daily (or weekly) LCpeak max 137 dBC</li>
    <li>Exposure limit value of 87dBA daily (or weekly) LCpeak max 140 dBC</li>
</ul>
HTML,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'heading' => 'Do You Need A Workplace Noise Risk Assessment?',
                'image' => '31004-029.jpg',
                'description' => <<<HTML
<p>If noise is intrusive, or you have to shout to be heard by someone less than 2 meters away then you should probably have an assessment.</p>

<p>We provide workplace noise risk assessments. We will work with you to assess the noise exposure of workers. We have assessed a broad range of employers ranging from 3 employees up to over 700 in a distribution centre.</p>

<ul>
    <li>We will measure noise at work stations</li>
    <li>Measure the daily exposure of employees to noise</li>
    <li>Measure peak noise levels</li>
</ul>
HTML,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'heading' => 'Noise Risk Assessments Including:',
                'image' => '53356-128.jpg',
                'description' => <<<HTML
<p>Our noise at work risk assessments are to Health and Safety Executive (HSE) standards and are suitable for insurance purposes.</p>

<p>Our service includes monitoring the vibration or noise exposure of individual employees. We will let you know the activities that generate the vibration or noise and provide recommendations to help you reduce vibration or noise exposure in the workplace.</p>
HTML,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert all records
        DB::table('noise_at_work')->insert($reports);
    }
}