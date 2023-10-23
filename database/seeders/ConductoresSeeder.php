<?php

namespace Database\Seeders;

use App\Models\Conductores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConductoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conductores::factory(20)->create();
    }
}
