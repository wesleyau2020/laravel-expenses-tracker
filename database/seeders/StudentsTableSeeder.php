<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; 

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); 

        // Insert multiple students into the database
        for ($i = 0; $i < 10; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name, 
                'math_grade' => $faker->numberBetween(0, 100), 
                'science_grade' => $faker->numberBetween(0, 100), 
                'english_grade' => $faker->numberBetween(0, 100), 
                'spanish_grade' => $faker->numberBetween(0, 100),
                'created_at' => now(),
                'updated_at' => now(), 
            ]);
        }
    }
}
