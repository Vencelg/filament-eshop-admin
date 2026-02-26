<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        $attributes = [
            'color' => ['Red', 'Blue', 'Green', 'Black', 'White'],
            'size' => ['XS', 'S', 'M', 'L', 'XL'],
            'material' => ['Cotton', 'Polyester', 'Leather', 'Wool'],
        ];

        foreach ($attributes as $code => $values) {
            $attribute = Attribute::factory()->create([
                'code' => $code,
                'name' => ucfirst($code),
            ]);

            foreach ($values as $value) {
                AttributeValue::factory()->create([
                    'attribute_id' => $attribute->id,
                    'code' => $code.'-'.strtolower($value),
                    'value_name' => $value,
                ]);
            }
        }
    }
}
