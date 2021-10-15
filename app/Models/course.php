<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    private static $courses = [
        [
            'matkul' => 'web development',
            'code' => 'wevDev',
            'guru' => 'Mrs Laura',
            'sks' => '6',
            'description' => 'mata kuliah yang mengajarkan web development'
        ],
        [
            'matkul' => 'Game Design',
            'code' => 'gameDes',
            'guru' =>'Mr Yuwono',
            'sks' => '4',
            'description' => 'mata kuliah yang mengajarkan game design'
        ],
        [
            'matkul' => 'Discreate math',
            'code' => 'disMath',
            'guru' => 'Mrs Citra',
            'sks' => '4',
            'description' => 'mata kuliah yang mengajarkan discreate math'
        ],
        [
            'matkul' => 'Mobile app development',
            'code' => 'mad',
            'guru' => 'Mr Mychael',
            'sks' => '4',
            'description' => 'mata kuliah yang mengajarkan web development'
        ],
        [
            'matkul' => 'Becoming Indo',
            'code' => 'bindo',
            'guru' => 'Mrs citra',
            'sks' => '4',
            'description' => 'mata kuliah yang mengajarkan sejaran indo'
        ],
    ];

    public static function allData(){
        return collect (self::$courses);
    }

    public static function dataWithCode($code){
        $allCourse = static::allData();
        return $allCourse->firstWhere('code', $code);
        // foreach ($allProject as $pro){
        //     if ($pro['code']=== $code){
        //         return $pro;
        //     }      
        // }
    }
    
}
