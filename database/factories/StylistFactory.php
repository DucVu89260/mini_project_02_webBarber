<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stylist>
 */
class StylistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'              => $this->faker->name,
            'gender'            => $this->faker->boolean,
            'birth_date'        => $this->faker->dateTimeBetween('-30 years','-18 years')->format('Y-m-d'),
            'phone'             => $this->faker->phoneNumber,
            'address_province'  => $this->faker->state,
            'created_at'        => $this->faker->dateTimeBetween('-5 years','now')->format('Y-m-d'),
            'updated_at'        => $this->faker->dateTimeBetween('-5 years','now')->format('Y-m-d'),
        ];
    }
}
