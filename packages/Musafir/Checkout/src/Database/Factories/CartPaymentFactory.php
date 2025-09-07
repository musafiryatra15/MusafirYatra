<?php

namespace Musafir\Checkout\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Musafir\Checkout\Models\CartPayment;

class CartPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CartPayment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
