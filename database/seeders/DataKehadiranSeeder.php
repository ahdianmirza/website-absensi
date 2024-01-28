<?php

namespace Database\Seeders;

use App\Models\DataKehadiran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataKehadiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataKehadiran::factory()->count(50)->create();
    }
}