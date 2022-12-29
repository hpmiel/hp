<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName,
            'group_id' => 1,
            'email' => fake()->unique()->safeEmail(),
            'cellphone' => fake()->phoneNumber,
            'email_verified_at' => now(),
            'password' => Hash::make('1234'), // password
        ];
    }

}
