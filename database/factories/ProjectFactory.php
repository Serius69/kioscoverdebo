<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;
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
            'author' => 'nombre del autor',
            'description' => $this->faker->paragraph(),
            'projectPhoto' => $this->faker->url(800,600),
        ];
    }
}
