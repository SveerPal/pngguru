<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        Testimonial::create([
            'name'         =>  $faker->name,
            'designation'  =>  $faker->jobTitle.', '.$faker->company ,
            'comment'      =>  $faker->paragraph
        ]);

        $faker2 = Faker::create();
        Testimonial::create([
            'name'         =>  $faker2->name,
            'designation'  =>  $faker2->jobTitle.', '.$faker2->company ,
            'comment'      =>  $faker2->paragraph
        ]);

        $faker3 = Faker::create();
        Testimonial::create([
            'name'         =>  $faker3->name,
            'designation'  =>  $faker3->jobTitle.', '.$faker3->company ,
            'comment'      =>  $faker3->paragraph
        ]);
    }
}
