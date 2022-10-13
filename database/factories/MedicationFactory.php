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
            // 'pharmacist_id' => $this->factory(Pharmacist::class)->create()->id,
            // 'category_id' =>  $this->factory(Category::class)->create()->id,
            // 'invoice_id' =>  $this->factory(Invoice::class)->create()->id,
            // 'name_medication' => $this->faker->name ,
            // 'manufacturing_date' => $this->faker->date(),
            // 'Expiry_date' => $this->faker->date() ,
            // 'description_medication' => $this->faker->text(),
        ];
    }
}
