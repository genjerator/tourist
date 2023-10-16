<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //1,evgenije,e.medjesi@gmail.com,,$2y$10$hjzcRr4O4R39K9CiAyuKT.WON/A6IVm7eWOHE5V91HE9zzBAa3d82,,2023-09-08 08:14:17,2023-09-08 08:14:17
        if(!User::where('name', 'Evgenije')->exists()) {
            User::factory()->create(

                [
                    'name' => 'Evgenije',
                    'email' => 'e.medjesi@gmail.com',
                    'password' => '$2y$10$hjzcRr4O4R39K9CiAyuKT.WON/A6IVm7eWOHE5V91HE9zzBAa3d82'
                ]

            );
        }
    }
}
