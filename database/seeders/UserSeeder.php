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
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sk Hossain Rajib',
            'email' => 'skhossainrazib@gmail.com',
            'contact' => '01919414153',
            'image' => 'avatar.png',
            'slug' => 'sk-hossain-rajib',
            'status' => 1,
            'role_id' => 1,
            'password' => Hash::make('kalilinuxpro2022@'),
            'created_at' => '2022-08-03 19:03:40',
            'updated_at' => '2022-08-03 19:03:40',

        ]);
        DB::table('users')->insert([
            'name' => 'Takiya Yeasmin',
            'email' => 'directorsrinstitute22@gmaiil.com',
            'contact' => '01919414153',
            'image' => 'avatar.png',
            'slug' => 'takiya-yeasmin',
            'status' => 1,
            'role_id' => 2,
            'password' => Hash::make('kalilinuxpro2022@'),
            'created_at' => '2022-08-03 19:03:40',
            'updated_at' => '2022-08-03 19:03:40',
        ]);
    }
}
