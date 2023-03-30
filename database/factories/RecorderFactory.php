<?php

namespace Database\Factories;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recorder>
 */
class RecorderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'content' => fake()->name(),
            'value' => fake()->numberBetween(1,3),
            'date' => fake()->numberBetween(1,7),
            //свое время для теста
            'time' => "11:57:00",
            'user_id' => fake()->numberBetween(1,49),
            'user_email' => fake()->email()
        ];
    }
}
