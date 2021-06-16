<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Video;
use Faker\Provider\Youtube;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $this->faker->addProvider(new Youtube($this->faker));

        $url_video = $this->faker->youtubeEmbedUri();
        $url_video_array = explode("/", $url_video);
        $url_video_id = $url_video_array[4];
        $url_thumbail = 'http://img.youtube.com/vi/'.$url_video_id.'/0.jpg';

        return [
            'name' => $this->faker->unique()->sentence(),
            'date_public' => $this->faker->date(),
            'url_video' => $url_video,
            'url_thumbail' => $url_thumbail,
            'status' => $this->faker->randomElement([1,2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
