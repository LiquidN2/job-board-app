<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title'       => $this->faker->jobTitle(),
            'description' => $this->faker->text(1000),
            'salary'      => $this->faker->numberBetween($min = 1000, $max = 150000),
            'employer_id' => Employer::inRandomOrder()->first()->id,
        ];
    }
}
