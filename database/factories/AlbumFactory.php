<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'launch' => $this->faker->date('Y-m-d', $max ='now'),
            'record_company' => $this->faker->randomElement(['Som Music', 'Globo Music', 'Spotify Music']),
        ];
    }
}
