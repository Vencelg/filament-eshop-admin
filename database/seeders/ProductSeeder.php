<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Outlet;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Stock;
use App\Models\Variant;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $outlets = Outlet::all();
        $attributes = Attribute::all();

        Product::factory()
            ->count(20)
            ->recycle($categories)
            ->create()
            ->each(function (Product $product) use ($outlets, $attributes) {
                // Attach 1-3 random attributes to the product
                $product->attributes()->attach(
                    $attributes->random(random_int(1, min(3, $attributes->count())))->pluck('id')
                );

                ProductImage::factory()
                    ->count(random_int(1, 3))
                    ->create(['product_id' => $product->id]);

                Variant::factory()
                    ->count(random_int(1, 4))
                    ->create(['product_id' => $product->id])
                    ->each(function (Variant $variant) use ($outlets, $product) {
                        // Attach a subset of the product's attributes to the variant
                        $productAttributes = $product->attributes;
                        $variant->attributes()->attach(
                            $productAttributes->random(random_int(1, $productAttributes->count()))->pluck('id')
                        );

                        // Create stock for each variant at each outlet
                        foreach ($outlets as $outlet) {
                            Stock::factory()->create([
                                'outlet_id' => $outlet->id,
                                'stockable_type' => Variant::class,
                                'stockable_id' => $variant->id,
                            ]);
                        }
                    });
            });
    }
}
