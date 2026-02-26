<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'electronics' => 'Electronics',
            'clothing' => 'Clothing',
            'home-garden' => 'Home & Garden',
            'sports' => 'Sports',
            'books' => 'Books',
        ];

        foreach ($categories as $code => $name) {
            $parent = Category::factory()->create([
                'code' => $code,
                'name' => $name,
            ]);

            // Create 2 subcategories for each parent
            Category::factory()->count(2)->create([
                'category_id' => $parent->id,
            ]);
        }
    }
}
