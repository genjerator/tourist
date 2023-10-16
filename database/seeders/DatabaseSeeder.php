<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PointType;
use App\Models\UserType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoundSeeder::class);
        $this->call(ChallengeSeeder::class);
        $this->call(PointTypeSeeder::class);
        $this->call(UserSeeder::class);

    }
}
