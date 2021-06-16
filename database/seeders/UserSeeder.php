<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::create([ 
            'name' => 'Jeyson Junior Ventura Aguilar',
            'email' => 'jeysonv.sis@gmail.com',
            'password' => bcrypt('untecs18')
        ]);

        User::factory(99)->create();
    }
}
