<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name'      => 'Rivaldi Warman',
            'email'     => 'rivaldi@itconcept.sg',
            'password'  => Hash::make('admin')
        ]);
        DB::table('users')->insert([
            'name'      => 'Admin',
            'email'     => 'admin@swissairtechnology.com',
            'password'  => Hash::make('admin123')
        ]);

        DB::table('pages')->insert([
            'name'          => 'About Us',
            'slug'          => 'about-us',
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, optio dicta sit voluptatem laboriosam explicabo! Veniam, magnam. Inventore, quam facere ratione libero consequuntur tenetur vel cupiditate aut eos provident totam!' 
        ]);
    }
}
