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
    public function definition()
    {
        return [
            'name' => "omer",
            'email' => 'omer@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'salary' => '1000',
            'role_id' => '1',
            'phone_number' => '2313231',
            'national_id' => '22313',
            'password' => Hash::make('oooooo'), // password
            'remember_token' => Str::random(11),
             'job_title' => 'System Administrator',
            'birth_date' => '1990-01-01',
            'hire_date' => '1990-01-01',
            'department_id' => '1',
            'nationality' => 'Egyptian',
             
        ];
    }

    public function withToken()
    {
        return $this->afterCreating(function ($user) {
            $user->createToken('token')->accessToken;
        });
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
