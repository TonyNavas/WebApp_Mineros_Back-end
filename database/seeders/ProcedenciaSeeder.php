<?php

namespace Database\Seeders;

use App\Models\Procedencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcedenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Procedencia::factory(20)->create();
    }
}
