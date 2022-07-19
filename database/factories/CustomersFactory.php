<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'   => $this->faker->firstName(),
            'last_name'    => $this->faker->lastName(),
            'email'        => $this->faker->email(),
            'phone'        => $this->faker->phoneNumber(),
            'gender'       => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'dob'          => $this->faker->date(),
            'company_name' => $this->faker->company(),
            'occupation'   => $this->faker->jobTitle(),
            'insurance'    => $this->faker->company(),
            'reference'    => $this->faker->text,
        ];
    }
}
