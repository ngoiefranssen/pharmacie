<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cashier_id' => $this->factoryForModel(Category::class)->create()->id,
            'description_invoice' => $this->factory->text(),
            'amount' => $this->factory->amount,
            'date_invoice' => $this->factory->date,
        ];
    }
}
