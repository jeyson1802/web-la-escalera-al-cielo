<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->unique()->name(),
            'email' => $this->faker->unique()->freeEmail(),
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'answer' => $this->faker->sentence(),
            'date_birth' => $this->faker->date(),
            'country_id' => Country::all()->random()->id
        ];
    }
}
