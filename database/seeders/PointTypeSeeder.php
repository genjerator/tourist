<?php

namespace Database\Seeders;

use App\Models\PointType;
use App\Models\UserType;
use Illuminate\Database\Seeder;

class PointTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PointType::factory()->create(
            [
                'name'=>'Coins',
                'description'=>'Coins',
            ]
        );
    }
}
