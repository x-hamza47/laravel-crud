<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_name' => fake()->name(),
            'email' => fake()->unique()->email(),
            'department' => fake()->randomElement(['HR','QA','Networking','Development']),
            'salary' => fake()->numberBetween(25000,70000),
            'city' => fake()->randomElement(['Karachi','Lahore','Islamabad'])
        ];
    }
}
