<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Country;
use App\Models\Document;
use App\Models\Person;
use App\Models\Post;
use App\Models\Social;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{   

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        $this->call(UserSeeder::class);

        Storage::deleteDirectory('socials-icon');
        Storage::makeDirectory('socials-icon');
        $socials = Social::factory(7)->create();

        Storage::deleteDirectory('countries-flag');
        Storage::deleteDirectory('countries-firm');
        Storage::makeDirectory('countries-flag');
        Storage::makeDirectory('countries-firm');
        $countries = Country::factory(18)->create();

        // Se llenan datos de la tabla muchos a muchos - social_country
        foreach ($countries as $country) {
            foreach ($socials as $social) {

                $country->socials()->attach($social->id, [
                    'link' => 'https://www.facebook.com/ministeriopalabrayespiritu/'
                ]);
            }
        }

        Person::factory(50)->create();

        Category::factory(7)->create();

        Video::factory(25)->create();

        $this->call(PostSeeder::class);

        Storage::deleteDirectory('documents');
        Storage::makeDirectory('documents');
        Document::factory(25)->create();

    }
}
