<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            'name' => 'Male',
            'status' => 1,
            'slug' => 'male',
        ]);
        DB::table('genders')->insert([
            'name' => 'Female',
            'status' => 1,
            'slug' => 'female',
        ]);
    }
}
