<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gambar>
 */
class GambarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'gambar' => "https://source.unsplash.com/500x400?nature",
            'gambarable_type' => "App\Models\Album",
            'gambarable_id' => mt_rand(1,3),
            'keterangan' => fake()->sentence(mt_rand(5,10))
        ];

        // $table->id();
        //     $table->nullableMorphs('gambarable');
        //     $table->string('gambar');
        //     $table->string('keterangan')->nullable();
        //     $table->timestamps();
    }
}
