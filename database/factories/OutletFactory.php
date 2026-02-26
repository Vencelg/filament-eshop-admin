<?php

namespace Database\Factories;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Outlet>
 */
class OutletFactory extends Factory
{
    protected $model = Outlet::class;

    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->bothify('OUT-####-??'),
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'phone_contact' => $this->faker->phoneNumber(),
            'email_contact' => $this->faker->companyEmail(),
        ];
    }
}
