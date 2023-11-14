<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GoatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price'=> $this->faker->numberBetween(),
            'color'=> $this->faker->colorName(),
            'birthday'=> $this->faker->dateTimeThisCentury(),
            'sex'=> $this->faker->boolean(),
        ];
    }
}
