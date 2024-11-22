<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'iPhone 15',
            'description' => 'Apple iPhone 15, 128GB',
            'img' => '/img/1.jpg',
            'cost' => 999,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S24',
            'description' => 'Samsung Galaxy S24, 256GB',
            'img' => '/img/2.jpg',
            'cost' => 1200,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 8',
            'description' => 'Google Pixel 8, 128GB',
            'img' => 'img/3.jpg',
            'cost' => 850,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'OnePlus 12',
            'description' => 'OnePlus 12, 256GB',
            'img' => 'img/4.jpg',
            'cost' => 900,
            'owner_id' => 1,
            'category_id' => 1,
        ]);


        DB::table('products')->insert([
            'name' => 'Samsung fold 6',
            'description' => 'Samsung fold 6, 256GB',
            'img' => 'img/5.jpg',
            'cost' => 1200,
            'owner_id' => 1,
            'category_id' => 1,
        ]);


        DB::table('products')->insert([
            'name' => 'Samsung Galaxy s23',
            'description' => 'Samsung Galaxy s23, 256GB',
            'img' => 'img/6.jpg',
            'cost' => 1000,
            'owner_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Ipad 10',
            'description' => 'Ipad 10, 128GB',
            'img' => 'img/7.jpg',
            'cost' => 1200,
            'owner_id' => 1,
            'category_id' => 2,
        ]);
    }
}
