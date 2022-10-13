<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacist>
 */
class PharmacistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name_pharmacist' => $this->factory->name,
            'first_name_pharmacist' => $this->factory->name,
            'num_tel_pharmacist' => $this->factory->number,
            'email_pharmacist' => $this->factory->unique()->safeEmail(),
        ];
    }
}
