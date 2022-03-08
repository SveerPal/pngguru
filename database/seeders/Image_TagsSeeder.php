<?php

namespace Database\Seeders;
use App\Models\Image_Tag;
use Illuminate\Database\Seeder;

class Image_TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image_Tag::create([
            'name'      =>  'Festival',
            'slug'      =>  'festival',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
        ]);
        Image_Tag::create([
            'name'      =>  'Wallpaper',
            'slug'      =>  'wallpaper',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
        ]);        
        Image_Tag::create([
            'name'      =>  'Banner',
            'slug'      =>  'banner',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
        ]);
    }
}
