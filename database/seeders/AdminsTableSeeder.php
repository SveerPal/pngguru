<?php
namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'      =>  'Roshan',
            'email'     =>  'admin@mycodingsolution.com',
            'password'  =>  bcrypt('admin@1234'),
        ]);
    }
}