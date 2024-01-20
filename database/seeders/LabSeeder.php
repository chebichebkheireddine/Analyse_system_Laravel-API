<?php

namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // This fo seeder Labs
        Lab::factory()
        ->Count(4)
        ->hasanalyses(2)
        ->create();
        Lab::factory()
        ->Count(10)
        ->hasanalyses(30)
        ->create();
    }
}
