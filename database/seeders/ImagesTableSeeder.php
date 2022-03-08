<?php

namespace Database\Seeders;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'name'      =>  'Creative Multiple Red Heart Png in HD',
            'slug'      =>  'creative-multiple-red-heart-png-in-hd',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy  in a type specimen book.'
        ]);
        Image::create([
            'name'      =>  'Valentine Cute Love I U png images',
            'slug'      =>  'valentine-cute-love-i-u-png-images-free',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy  in a type specimen book.'
        ]);
        Image::create([
            'name'      =>  'Love Romance Valentine\'s Day Heart png',
            'slug'      =>  'love-romance-valentines-day-heart-png',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy  in a type specimen book.'
        ]);
        Image::create([
            'name'      =>  'I LOVE YOU Valentines Day PNG Image',
            'slug'      =>  'i-love-you-valentines-day-png-image-hd',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy  in a type specimen book.'
        ]);
    }
}
