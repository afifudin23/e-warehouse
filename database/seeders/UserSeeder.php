<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            "email" => "admin",
            "password" => Hash::make("admin"),
        ]);

        User::factory(9)->create([
            "role" => "admin",
        ]);
    }
}
