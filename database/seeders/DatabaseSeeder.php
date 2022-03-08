<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(ClientelesTableSeeder::class);
        $this->call(Image_TagsSeeder::class);
        $this->call(Image_CategoriesSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
