<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => fake()->sentence(mt_rand(2,8)),
            'slug' => fake()->slug(),
            'penulis' => fake()->name(),
            'deskripsi' => '<p>'.implode('</p><p>',fake()->paragraphs(mt_rand(5,10))).'</p>'
        ];
    }
}
