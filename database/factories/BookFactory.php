<?php

namespace Database\Factories;

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
            'title'=> $this->faker-> sentence,
            'pages'=> $this->faker-> numberBetween(100,1000),
            'author_id'=> $this->faker->randomelement(\App\Models\Author::pluck('id')),
            'genre_id' => $this->faker->randomelement(\App\Models\Genre::pluck('id')),
        ];
    }
}
