<?php

namespace Database\Factories;

use App\Models\Outlet;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Stock>
 */
class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition(): array
    {
        return [
            'outlet_id' => Outlet::factory(),
            'stockable_type' => Variant::class,
            'stockable_id' => Variant::factory(),
            'code' => $this->faker->unique()->bothify('STK-####-??'),
            'quantity' => $this->faker->numberBetween(0, 200),
        ];
    }

    public function forVariant(?Variant $variant = null): static
    {
        return $this->state(fn (array $attributes) => [
            'stockable_type' => Variant::class,
            'stockable_id' => $variant?->id ?? Variant::factory(),
        ]);
    }

    public function forProduct(?Product $product = null): static
    {
        return $this->state(fn (array $attributes) => [
            'stockable_type' => Product::class,
            'stockable_id' => $product?->id ?? Product::factory(),
        ]);
    }
}
