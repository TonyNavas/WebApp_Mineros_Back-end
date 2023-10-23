<?php

namespace Database\Seeders;

use App\Models\Cooperativa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CooperativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cooperativa::factory(20)->create();
    }
}
