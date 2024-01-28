<?php

namespace Database\Seeders;

use App\Models\Kehadiran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KehadiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kehadiran::factory()->count(50)->create();
    }
}