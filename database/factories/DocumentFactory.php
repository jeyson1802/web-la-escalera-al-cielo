<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Document;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        return [
            'name' => $this->faker->unique()->sentence(),
            'date_public' => $this->faker->date(),
            'url_file' => 'documents/' . $this->faker->image('public/storage/documents', 50, 50, null, false),
            'status' => $this->faker->randomElement([1,2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
