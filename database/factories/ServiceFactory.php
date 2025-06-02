<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'           => $this->faker->name,
            'description'    => $this->faker->text,
            'duration'       => $this->faker->numberBetween(1, 3)*30,
            'price'       => $this->faker->numberBetween(2, 4)*50,
            'created_at'     => $this->faker->dateTimeBetween('-5 years','now')->format('Y-m-d'),
            'updated_at'     => $this->faker->dateTimeBetween('-5 years','now')->format('Y-m-d'),
        ];
    }
}
