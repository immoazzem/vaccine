<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = People::class;
    public function definition()
    {
        return [
            //
            'id_no' => $this->faker->ean8(),
            'dob' => $this->faker->date(),
            'office' => $this->faker->word,
            'registered' => rand(0, 1),
        ];
    }
}
