<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

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
            'code' => $this->faker->name(),
            'name' => $this->faker->unique()->safeEmail(),
            'price' => $this->faker->random(100),
            'desc' => 'Description', // password
        ];
        // \App\Models\Product::factory()->count(10)->create() // tinker
    }
}
