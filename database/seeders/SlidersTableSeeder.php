<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'name'      =>  'Slider 1',
            'heading_first'      =>  'free PNG stock',
            'heading_second'      =>  'Explore and download more than Million+ free PNG transparent images'
        ]);
        Slider::create([
            'name'      =>  'Slider 2',
            'heading_first'      =>  'Slider Second'
        ]);
        
    }
}
