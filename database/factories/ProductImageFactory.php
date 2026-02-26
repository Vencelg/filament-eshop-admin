<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductImage>
 */
class ProductImageFactory extends Factory
{
    protected $model = ProductImage::class;

    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'code' => $this->faker->unique()->bothify('IMG-####-??'),
            'name' => $this->faker->words(2, true),
            'url' => $this->faker->imageUrl(),
            'alt_text' => $this->faker->sentence(3),
        ];
    }
}
