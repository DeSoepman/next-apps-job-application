<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => fake()->company(),
            'description'   => fake()->catchPhrase(),
            'street'        => fake()->streetName() . ' ' . fake()->buildingNumber(),
            'city'          => fake()->city() . ' (' . fake()->postcode() . ')',
            'country_id'    => rand(1,5)
        ];
    }
}
