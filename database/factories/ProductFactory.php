<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(1, true),
            'price' => $this->faker->randomNumber(5, true),
            'qty' => $this->faker->randomDigitNotNull()
        ];
    }

    // protected $model = Product::class;
}
