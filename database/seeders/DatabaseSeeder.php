<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        
        DB::table('products')->insert([
            'model'          =>  'Iphone 14 Pro Max',
            'storage'       =>  '512GB',
            'image'         =>  'assets/img/iphone-01.jpg',
            'price'          =>  '$10'
        ]);

        DB::table('products')->insert([
            'model'          =>  'Iphone 14 Pro',
            'storage'       =>  '256GB',
            'image'         =>  'assets/img/iphone-02.jpg',
            'price'          =>  '$10'
        ]);

        DB::table('products')->insert([
            'model'          =>  'Iphone 14',
            'storage'       =>  '128GB',
            'image'         =>  'assets/img/iphone-03.jpg',
            'price'          =>  '$10'
        ]);

        DB::table('products')->insert([
            'model'          =>  'Iphone 13 Pro Max',
            'storage'       =>  '1TB',
            'image'         =>  'assets/img/iphone-02.jpg',
            'price'          =>  '$10'
        ]);
        DB::table('products')->insert([
            'model'          =>  'Iphone 13 Pro Max',
            'storage'       =>  '1TB',
            'image'         =>  'assets/img/iphone-02.jpg',
            'price'          =>  '$10'
        ]);
        DB::table('products')->insert([
            'model'          =>  'Iphone 13 Pro',
            'storage'       =>  '1TB',
            'image'         =>  'assets/img/iphone-03.jpg',
            'price'          =>  '$10'
        ]);

        DB::table('products')->insert([
            'model'          =>  'Iphone 13 Pro Max',
            'storage'       =>  '1TB',
            'image'         =>  'assets/img/iphone-02.jpg',
            'price'          =>  '$10'
        ]);

        DB::table('products')->insert([
            'model'          =>  'Iphone 13 ',
            'storage'       =>  '256GB',
            'image'         =>  'assets/img/iphone-03.jpg',
            'price'          =>  '$10'
        ]);

        DB::table('products')->insert([
            'model'          =>  'Iphone 13 Pro Max',
            'storage'       =>  '1TB',
            'image'         =>  'assets/img/iphone-01.jpg',
            'price'          =>  '$10'
        ]);
  
    }
}
