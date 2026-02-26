<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'category_id' => null,
            'code' => $this->faker->unique()->bothify('CAT-####-??'),
            'name' => $this->faker->unique()->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    public function withParent(?Category $parent = null): static
    {
        return $this->state(fn (array $attributes) => [
            'category_id' => $parent?->id ?? Category::factory(),
        ]);
    }
}
