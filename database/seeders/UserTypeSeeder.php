<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::factory()->create(

            [
                'name' => 'Creator',
                'description' => 'Creator desc',
            ]

        );
        UserType::factory()->create(

            [
                'name' => 'Contestant',
                'description' => 'Contestant desc',
            ]

        );

        UserType::factory()->create(

            [
                'name' => 'Guest',
                'description' => 'Guest desc',
            ]

        );
    }
}
