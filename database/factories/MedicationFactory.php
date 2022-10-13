<?php

namespace Database\Factories;

use App\Models\Pharmacist;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medication>
 */
class MedicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pharmacist_id' => Factory(Pharmacist::class)->create()->id,
            'category_id' =>  Factory(),
            'invoice_id' =>  ,
            'name_medication' => $faker->name_medication ,
            'manufacturing_date' => $faker->manufacturing_date ,
            'Expiry_date' => $faker->Expiry_date ,
            'description_medication' => $faker->description_medication,
        ];
    }
}
