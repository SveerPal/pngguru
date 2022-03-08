<?php

namespace Database\Seeders;
use App\Models\Image_Category;
use Illuminate\Database\Seeder;

class Image_CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image_Category::create([
            'name'      =>  'Png Images',
            'slug'      =>  'png-images',
            'description'=>'Millions Of Royalty Free Png Images, 500+ Updated Daily Combined Into Your Creative Ideas'
        ]);
        Image_Category::create([
            'name'      =>  'Background and Photos',
            'slug'      =>  'background-photos',
            'description'=>'Millions Of Royalty Free Png Images, 500+ Updated Daily Combined Into Your Creative Ideas'
        ]);        
        Image_Category::create([
            'name'      =>  'Templates',
            'slug'      =>  'templates',
            'description'=>'Millions Of Royalty Free Png Images, 500+ Updated Daily Combined Into Your Creative Ideas'
        ]);
        Image_Category::create([
            'name'      =>  'Holi',
            'slug'      =>  'holi',
            'parent_id'=>1,
            'popular'  =>1,
            'banner_search_below'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Letter',
            'slug'      =>  'letter',
            'parent_id'=>1,
            'popular'  =>1,
            'banner_search_below'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Fruit',
            'slug'      =>  'fruit',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Flower',
            'slug'      =>  'flower',
            'parent_id'=>1,
            'popular'  =>1,
            'banner_search_below'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Animal',
            'slug'      =>  'animal',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Eid',
            'slug'      =>  'eid',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Yoga',
            'slug'      =>  'yoga',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Vegetable',
            'slug'      =>  'vegetable',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Happy New Year',
            'slug'      =>  'happy-new-year',
            'parent_id'=>1,
            'popular'  =>1,
            'banner_search_below'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Good Morning',
            'slug'      =>  'good-morning',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Good Night',
            'slug'      =>  'good-night',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Festival',
            'slug'      =>  'festival',
            'parent_id'=>1
        ]);
        Image_Category::create([
            'name'      =>  'Quotes',
            'slug'      =>  'quotes',
            'parent_id'=>1,
            'popular'  =>1,
            'banner_search_below'=>1
        ]);
    }
}
