<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'price' => rand(3000,8000),
            'old_price' => rand(3500,8500),
            'vip_price' => rand(2500,7500),
            'score' => rand(3,5),
            'description' => $this->faker->text(300),
            'variants' => ['s', 'm', 'l'] || ['500G', '1K', '2K']
        ];
    }
}
