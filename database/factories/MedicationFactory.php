<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Invoice;
use App\Models\Pharmacist;
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
            'pharmacist_id' => $this->factory(Pharmacist::class)->create()->id,
            'category_id' =>  $this->factory(Category::class)->create()->id,
            'invoice_id' =>  $this->factory(Invoice::class)->create()->id,
            'name_medication' => $this->faker->name_medication ,
            'manufacturing_date' => $this->faker->manufacturing_date,
            'Expiry_date' => $this->faker->Expiry_date ,
            'description_medication' => $$this->faker->description_medication,
        ];
    }
}
