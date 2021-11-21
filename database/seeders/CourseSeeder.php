<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            'matkul' => 'web development',
            'course_code' => 'wevDev',
            'guru' => 'Mrs Laura',
            'sks' => 6,
            'description' => 'mata kuliah yang mengajarkan web development',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        
        DB::table('courses')->insert([
            'matkul' => 'Game Design',
            'course_code' => 'gameDes',
            'guru' =>'Mr Yuwono juyono',
            'sks' => 4,
            'description' => 'mata kuliah yang mengajarkan game design',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        

        DB::table('courses')->insert([
            'matkul' => 'Discreate math',
            'course_code' => 'disMath',
            'guru' => 'Mrs Citra',
            'sks' => 4,
            'description' => 'mata kuliah yang mengajarkan discreate math',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}




// [
//     'matkul' => 'Mobile app development',
//     'code' => 'mad',
//     'guru' => ['Mr Mychael'],
//     'sks' => '4',
//     'description' => 'mata kuliah yang mengajarkan web development'
// ],
// [
//     'matkul' => 'Becoming Indo',
//     'code' => 'bindo',
//     'guru' => ['Mrs citra'],
//     'sks' => '4',
//     'description' => 'mata kuliah yang mengajarkan sejaran indo'
// ]
