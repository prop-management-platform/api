<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropFactory extends Factory
{
    public function definition(): array
    {
        return [
            'shop_id' => Shop::inRandomOrder()->first()->id,
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(500, 100000) * 100,
            'image_url' => $this->faker->imageUrl(),
            'quantity' => $this->faker->numberBetween(1, 50),
        ];
    }
}
