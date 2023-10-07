<?php

namespace Database\Factories;

use App\Models\Booklist;
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
            'booklists_id' => Booklist::factory(),
            'author' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
        ];
    }
}
