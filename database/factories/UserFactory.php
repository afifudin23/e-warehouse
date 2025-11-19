<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id" => fake()->uuid(),
            "name" => fake()->name(),
            "email" => fake()->userName() . rand(100, 999) . "@test.com",
            "password" => Hash::make('test'),
            "role" => fake()->randomElement(["superadmin", "admin"]),
            "remember_token" => Str::random(20)
        ];
    }
}
