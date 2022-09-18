<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wiki>
 */
class WikiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'tags' => fake()->word().','.fake()->word().','.fake()->word(),
            'created_by' => fake()->numberBetween(1, 50),
        ];
    }
}

class WikiContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'wiki_id' => fake()->numberBetween(1, 50),
            'content' => fake()->text(),
            'is_approved' => true,
        ];
    }
}
