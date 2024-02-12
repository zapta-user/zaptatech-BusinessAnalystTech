<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            ['name' => 'Business Process Modeling'],
            ['name' => 'Business Analysis'],
            ['name' => 'Software Project Management'],
            ['name' => 'Software Documentation'],
            ['name' => 'Data Analysis and Data Modelling'],
            ['name' => 'API Documentation'],
            ['name' => 'Software Product Analysis'],
            ['name' => 'Business KPIs Analysis'],
            ['name' => 'Product Idea Validation'],
            ['name' => 'Software Research and Development'],
            ['name' => 'UX and Wireframing'],
            ['name' => 'Software Architecture Design'],
        ]);
    }
}
