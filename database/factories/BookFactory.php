<?php

namespace Database\Factories;

use Database\Factories\AuthorFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'author_id' => AuthorFactory::factory(),
            'name' => $this->faker->sentence(),
            'author_id' => $this->faker->randomDigit(),
        ];
    }
}
