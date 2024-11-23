<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@lojasmart.pt',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'client',
            'email' => 'client@lojainfo.pt',
            'password' => Hash::make('client'),
        ]);
    }
}
