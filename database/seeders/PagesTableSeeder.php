<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name'      =>  'About Us',
            'slug'      =>  'about-us',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
        ]);
        Page::create([
            'name'      =>  'Contact Us',
            'slug'      =>  'contact-us',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
        ]);
        Page::create([
            'name'      =>  'Privacy Policy',
            'slug'      =>  'privacy-policy',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
        ]);
        Page::create([
            'name'      =>  'Terms & Conditions',
            'slug'      =>  'terms-conditions',
            'description'=>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
        ]);
        Page::create([
            'name'      =>  'DMCA',
            'slug'      =>  'dmca',
            'description'=>'If we have added some content that belong to you or your organization by mistake, we are sorry for that. we apologize for that and assure you that this won\'t be repeated in future. if you are rightful owner of the content used in our website, please contact through the my Contact Us page. please mention All the detail like Your Name, Organazation name, Contact Details, copyright infringing link and copyright proof (Link Or legal Document).

I assure you that if All Detail are right which is provided from your side. We will remove the infringing content from pngguru.in with in 3 to 5 working days.'
        ]);
    }
}
