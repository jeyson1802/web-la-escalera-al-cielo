<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $name = $this->faker->unique()->country();

        return [
            'name' => $name,
            'slug' => Str::slug($name), 
            'url_flag' => 'countries-flag/' . $this->faker->image('public/storage/countries-flag', 103, 82, null, false),
            'url_firm' => 'countries-firm/' . $this->faker->image('public/storage/countries-firm', 574, 350, null, false),
            'email' => $this->faker->unique()->freeEmail(),
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            'address' => $this->faker->address(),
            'schedule' => $this->faker->sentence()
        ];
    }
}
