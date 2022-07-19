<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id'  => 1,
            'inventory_id' => 1,
            'value'        => $this->faker->numberBetween(10, 100),
            'gst'          => '7',
            'description'  => $this->faker->text
        ];
    }
}
