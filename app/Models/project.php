<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    private static $projects = [
        [
            'title' => 'Calculator',
            'code' => 'cal',
            'course' => 'Algorith programming'
        ],
        [
            'title' => 'Accounting',
            'code' => 'acc',
            'course' => 'web programming'
        ],
        [
            'title' => 'student',
            'code' => 'stu',
            'course' => 'web programming'
        ]
    ];

    public static function allData(){
        return collect (self::$projects);
    }

    public static function dataWithCode($code){
        $allProject = static::allData();
        return $allProject->firstWhere('code', $code);
        // foreach ($allProject as $pro){
        //     if ($pro['code']=== $code){
        //         return $pro;
        //     }      
        // }
    }
    

}
