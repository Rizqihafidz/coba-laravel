<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aparatur>
 */
class AparaturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NIP' => rand(10, 100),
            'gambar' => "https://source.unsplash.com/200x200?person",
            'jabatan' => fake()->sentence(mt_rand(1,3)),
            'nama' => fake()->name(),
            'tanggal_menjabat' => fake()->dateTimeThisDecade(),
        ];
    }
}
