<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Company' => fake()->word(),
            'Departure_station'=> fake()->word(),
            'Arrival_station' => fake()->word(),
            'Departure_time' => fake()->time(),
            'Arrival_time' => fake()->time(),
            'Train_Code' => fake()->ean8(),
            'Number_of_Carriages' => fake()->randomDigitNotNull(),
            'On_time' => fake()->time(),
            'Cancelled' => fake()->boolean(),
        ];
    }
}