<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Domain::insert([
            [
                'name' => 'AI, ML, VR, & AR'
            ],
            [
                'name' => 'Blockchain'
            ], [
                'name' => 'CRM'
            ], [
                'name' => 'ERP Management'
            ], [
                'name' => 'FinTech'
            ], [
                'name' => 'Hospital and Clinic'
            ], [
                'name' => 'eCommerce'
            ], [
                'name' => 'Supply Chain'
            ], [
                'name' => 'Inventory Management'
            ], [
                'name' => 'Property & Land'
            ], [
                'name' => 'CMS'
            ], [
                'name' => 'Transport and Vehicles'
            ], [
                'name' => 'Education & eLearning'
            ], [
                'name' => 'Hotel Management'
            ], [
                'name' => 'Medical & HealthCare'
            ], [
                'name' => 'Trading and Business'
            ]
        ]);
    }
}
