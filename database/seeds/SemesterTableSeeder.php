<?php

use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->delete();
        
        DB::table('semesters')->insert([
          'name' => 'Spring 2018',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Fall 2018',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Spring 2019',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Fall 2019',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Spring 2020',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Fall 2020',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Spring 2021',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Fall 2021',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Spring 2022',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Fall 2022',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Spring 2023',
        ]);
        
        DB::table('semesters')->insert([
          'name' => 'Fall 2023',
        ]);
    }
}
