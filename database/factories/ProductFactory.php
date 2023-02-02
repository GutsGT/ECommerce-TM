<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word;
        return [
            'name'=>$name,
            'slug'=> Str::slug($name),
            'cover'=>$this->faker->imageURL,
            'price'=>$this->faker->randomFloat(1, 20, 30),
            'description'=>$this->faker->sentence,
            'stock'=>$this->faker->randomDigit()
        ];
    }
}
