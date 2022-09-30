<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operator>
 */
class OperatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'description' => $this->faker->sentence(),
            'url' => $this->faker->date(),
            'description' => $this->faker->sentence(),
            'photo_id' => 1,
            'status' => 1
        ];
    }
}
