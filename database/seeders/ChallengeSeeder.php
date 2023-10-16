<?php

namespace Database\Seeders;

use App\Models\Challenge;
use App\Models\Round;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Challenge::factory(5)->create();
    }
}
