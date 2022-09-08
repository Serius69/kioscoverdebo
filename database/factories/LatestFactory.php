<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Latest;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Latest>
 */
class LatestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Latest::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $url = "https://picsum.photos/800/600?random=12965";
        return [
            'name' => $this->faker->sentence(),
            'information' => $this->faker->randomElemtn,
            'description' => $this->faker->paragraph(),
            'latestPhoto' => $this->faker->url(800,600),
        ];
    }
}
