<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Smartphones',
        ]);

        DB::table('categories')->insert([
            'name' => 'Tablets',
        ]);

        DB::table('categories')->insert([
            'name' => 'Acessórios',
        ]);





    }
}
