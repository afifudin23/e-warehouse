<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(100)->create();
        User::factory()->create([
            "name" => "Andev Coordinator",
            "role" => "superadmin",
            "email" => "superadmin@test.com"
        ]);

        User::factory(199)->create([
            "role" => "admin",
        ]);
    }
}
