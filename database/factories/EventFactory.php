<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $url = "https://picsum.photos/800/600?random=12965";
        return [
            'name' => $this->faker->name(),
            'media' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'event_photo' => $this->faker->url(800,600),
        ];
    }
}
