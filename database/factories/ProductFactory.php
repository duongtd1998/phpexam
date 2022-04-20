<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->price(),
            'quantity' => $this->faker->quantity(),
            'size' => $this->faker->size(),
            'color' => $this->faker->color(),
            'mfg' => $this->faker->mfg(),
            'exp' => $this->faker->exp(),
        ];
    }
}
