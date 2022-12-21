<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificationSeeder extends Seeder
{

    public function run()
    {
        DB::table('qualifications')->insert([
            'name' => 'Diploma-In-Engineering Complete',
            'status' => 1,
            'slug' => 'diploma-in-engineering',
        ]);
        DB::table('qualifications')->insert([
            'name' => 'Graduation Complete',
            'status' => 1,
            'slug' => 'Graduation',
        ]);
    }
}
