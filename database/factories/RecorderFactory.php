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
            'content' => fake()->name(),
            'users_id' => fake()->unique()->numberBetween(1,50)
        ];
    }
}
