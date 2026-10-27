<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
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
            'isbn' => fake()->unique()->isbn13(),
            'title' => fake()->sentence(3),
            'author_id' => Author::factory(),
            'publisher' => fake()->company(),
            'year' => fake()->numberBetween(2000, 2026),
            'description' => fake()->paragraph(),
            'cover' => null,
            'status' => fake()->randomElement(['available', 'borrowed']),
        ];
    }
}