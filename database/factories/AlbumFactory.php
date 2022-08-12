<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->sentence(mt_rand(2,5)),
            'sampul' => "https://source.unsplash.com/500x400?nature",
            'slug' => fake()->slug(),
            'keterangan' => fake()->sentence(mt_rand(5,10)),
        ];
    }
}
