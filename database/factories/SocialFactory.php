<?php

namespace Database\Factories;

use App\Models\Social;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SocialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Social::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   

        $name = $this->faker->word(15);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'url_icon' => 'socials-icon/' . $this->faker->image('public/storage/socials-icon', 34, 34, null, false)
        ];
    }
}
