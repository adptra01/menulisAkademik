<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Academy>
 */
class AcademyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => Str::slug($this->faker->sentence()),
            'thumbnail' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(),
        ];
    }
}
