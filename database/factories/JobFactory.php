<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->jobTitle(),
            'employer_id'=> Employer::factory(),
            'location'=>'remote',
            'description'=> fake()->paragraph(),
            'type'=> fake()->randomElement(['full-time','part-time','contract']),

        ];
    }
}
