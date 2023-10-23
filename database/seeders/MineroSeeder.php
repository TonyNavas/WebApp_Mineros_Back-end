<?php

namespace Database\Seeders;

use App\Models\Minero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MineroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Minero::factory(20)->create();
    }
}
