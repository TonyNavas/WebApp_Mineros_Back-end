<?php

namespace Database\Seeders;

use App\Models\Camiones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Camiones::factory(20)->create();
    }
}
