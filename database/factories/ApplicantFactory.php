<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName'=>$this->faker->text(),
            'email'=>$this->faker->text(),
            'dep'=>$this->faker->text(),
           'graduYear'=>$this->faker->text(),
           'placeTo'=>$this->faker->text(),
           'lang'=>$this->faker->text(),
           'date'=>$this->faker->date(),
           'grad'=>$this->faker->text(),
            //$table->timestamps(),
        ];
    }
}
